<?php
    require '../config/db_connection.php';

    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: ../index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>F. Johnrel - Notes</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Changa+One:ital@0;1&family=Outfit:wght@100..900&display=swap"
        rel="stylesheet">

    <!-- Links -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/header.css">
    <link rel="stylesheet" href="../assets/css/components.css">
    <link rel="stylesheet" href="../assets/css/notes.css">
</head>

<body>
    <div class="container-fluid">
        <header>
            <nav>
                <div class="logo-container">
                    <a href="#home">
                        <img src="../assets/images/logo-dark.png" alt="logo">
                    </a>
                </div>

                <div class="links-container">
                    <a href="../functions/logout.php">
                        <button type="button" class="btn danger-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none"><path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="#e74c3c" d="M12 3a1 1 0 0 1 .117 1.993L12 5H7a1 1 0 0 0-.993.883L6 6v12a1 1 0 0 0 .883.993L7 19h4.5a1 1 0 0 1 .117 1.993L11.5 21H7a3 3 0 0 1-2.995-2.824L4 18V6a3 3 0 0 1 2.824-2.995L7 3zm5.707 5.464l2.828 2.829a1 1 0 0 1 0 1.414l-2.828 2.829a1 1 0 1 1-1.414-1.415L17.414 13H12a1 1 0 1 1 0-2h5.414l-1.121-1.121a1 1 0 0 1 1.414-1.415"/></g></svg>
                            Logout
                        </button>
                    </a>
                </div>

                <div class="dropdown links-dropdown">
                    <button type="button" class="btn" data-bs-toggle="dropdown">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <g fill="none">
                                <path
                                    d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z" />
                                <path fill="#fff"
                                    d="M20 18a1 1 0 0 1 .117 1.993L20 20H4a1 1 0 0 1-.117-1.993L4 18zm0-7a1 1 0 1 1 0 2H4a1 1 0 1 1 0-2zm0-7a1 1 0 1 1 0 2H4a1 1 0 0 1 0-2z" />
                            </g>
                        </svg>
                    </button>

                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../functions/logout.php">Logout</a></li>
                    </ul>
                </div>
            </nav>
        </header>

        <div class="notes-container">

            <form class="note-form" action="../functions/save_note.php" method="post">
                <input type="text" name="title" placeholder="Title" required>
                <textarea name="content" placeholder="Write your note here..." required></textarea>
                <button type="submit" class="btn primary-btn">Save Note</button>
            </form>

            <div class="all-notes">
                <div class="all-notes-header">
                    <h1>My Notes</h1>                    
                </div>

                <div class="notes">
                    <?php
                        // Ensure session is started
                        if (session_status() === PHP_SESSION_NONE) {
                            session_start();
                        }

                        // Ensure database connection exists
                        if (!isset($conn)) {
                            echo "<p class='text-danger'>Database connection error.</p>";
                            return;
                        }

                        // Get current user's ID from session
                        $current_user_id = $_SESSION['user_id'] ?? null;

                        // If user ID not in session, try to get it from username
                        if (!$current_user_id && !empty($_SESSION['username'])) {
                            $username = $_SESSION['username'];
                            $stmt = $conn->prepare("SELECT id FROM users WHERE username = ?");
                            $stmt->bind_param("s", $username);
                            $stmt->execute();
                            $user_result = $stmt->get_result();
                            if ($row = $user_result->fetch_assoc()) {
                                $current_user_id = $row['id'];
                                $_SESSION['user_id'] = $current_user_id; // save for future
                            }
                            $stmt->close();
                        }

                        // If still no user ID, show error
                        if (!$current_user_id) {
                            echo "<p class='text-center text-danger'>Error: Not logged in properly.</p>";
                        } else {
                            // Fetch notes safely using prepared statement
                            $stmt = $conn->prepare("SELECT id, title, content, created_at FROM notes WHERE user_id = ? ORDER BY created_at DESC");
                            $stmt->bind_param("i", $current_user_id);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            if ($result->num_rows > 0) {
                                while ($note = $result->fetch_assoc()) {
                                    $date = date('M d, Y • h:i A', strtotime($note['created_at']));
                                    ?>
                                    <div class="note">

                                        <div class="note-header">
                                            <h3 data-bs-toggle="modal" data-bs-target="#editModal" data-id="<?= $note['id'] ?>" data-title="<?= htmlspecialchars($note['title'], ENT_QUOTES) ?>" data-content="<?= htmlspecialchars($note['content'], ENT_QUOTES) ?>"> <?= htmlspecialchars($note['title']) ?></h3>
                                            
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0" data-bs-toggle="dropdown" onclick="event.stopPropagation()">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><g fill="none"><path d="m12.593 23.258l-.011.002l-.071.035l-.02.004l-.014-.004l-.071-.035q-.016-.005-.024.005l-.004.01l-.017.428l.005.02l.01.013l.104.074l.015.004l.012-.004l.104-.074l.012-.016l.004-.017l-.017-.427q-.004-.016-.017-.018m.265-.113l-.013.002l-.185.093l-.01.01l-.003.011l.018.43l.005.012l.008.007l.201.093q.019.005.029-.008l.004-.014l-.034-.614q-.005-.018-.02-.022m-.715.002a.02.02 0 0 0-.027.006l-.006.014l-.034.614q.001.018.017.024l.015-.002l.201-.093l.01-.008l.004-.011l.017-.43l-.003-.012l-.01-.01z"/><path fill="#1E90FF" d="M12 16.5a1.5 1.5 0 1 1 0 3a1.5 1.5 0 0 1 0-3m0-6a1.5 1.5 0 1 1 0 3a1.5 1.5 0 0 1 0-3m0-6a1.5 1.5 0 1 1 0 3a1.5 1.5 0 0 1 0-3"/></g></svg>
                                                </button>

                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="../functions/delete_note.php?id=<?= $note['id'] ?>" 
                                                        onclick="event.stopPropagation(); return confirm('Delete this note?')">
                                                        Delete Note
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <small data-bs-toggle="modal" data-bs-target="#editModal" data-id="<?= $note['id'] ?>" data-title="<?= htmlspecialchars($note['title'], ENT_QUOTES) ?>" data-content="<?= htmlspecialchars($note['content'], ENT_QUOTES) ?>"> <?= $date ?></small>
                                        <p data-bs-toggle="modal" data-bs-target="#editModal" data-id="<?= $note['id'] ?>" data-title="<?= htmlspecialchars($note['title'], ENT_QUOTES) ?>" data-content="<?= htmlspecialchars($note['content'], ENT_QUOTES) ?>"> <?= nl2br(htmlspecialchars($note['content'])) ?></p>
                                    </div>
                                    <?php
                                }
                            } else {
                                echo "<p class='text-center text-muted  '>No notes yet.</p>";
                            }

                            $stmt->close();
                        }
                    ?>
                </div>
            </div>

            <!-- Edit Note Modal -->
             
            <div class="modal fade" id="editModal">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <form action="../functions/save_note.php" method="post">
                            <div class="modal-header">
                                <input type="hidden" name="id" id="edit-id">
                                <input type="text" name="title" id="edit-title" class="form-control" required>
                            </div>

                            <div class="modal-body">
                                <textarea name="content" id="edit-content" class="form-control" rows="6" required></textarea>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn primary-btn">Save Changes</button>
                                <button type="button" class="btn secondary-btn" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    const editModal = document.getElementById('editModal');

    editModal.addEventListener('show.bs.modal', event => {
        const note = event.relatedTarget;

        document.getElementById('edit-id').value = note.dataset.id;
        document.getElementById('edit-title').value = note.dataset.title;
        document.getElementById('edit-content').value = note.dataset.content;
    });
</script>

</html>
