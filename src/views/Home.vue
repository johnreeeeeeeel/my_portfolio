<template>
    <div class="container-fluid layout">

        <div id="hero" class="row">
            <div class="col intro-cont">
                <h1>Hi I am Johnrel</h1>

                <div style="margin-bottom: 18px;">
                    <p>I'm a BSIT student, still learning and improving my skills.</p>
                    <p>I'm passionate about creating and designing.</p>
                    <p>Beside coding, I also enjoy film making.</p>
                </div>

                <div class="action-buttons">
                    <button type="button" class="btn primary-btn">About Me</button>
                    <button type="button" class="btn transparent-btn">
                        My Projects
                        <Icon icon="mingcute:right-line" />
                    </button>
                </div>

                <div class="social-links">
                    <a href="https://github.com/johnreeeeeeeel" target="_blank">
                        <Icon icon="mingcute:github-fill" width="32" height="32" />
                    </a>
                    <a href="https://www.facebook.com/f.johnreeeeeeeel" target="_blank">
                        <Icon icon="mingcute:facebook-fill" width="32" height="32" />
                    </a>
                    <a href="https://www.tiktok.com/@johnreeeeeeeel" target="_blank">
                        <Icon icon="mingcute:tiktok-fill" width="32" height="32" />
                    </a>
                    <a href="https://www.instagram.com/john.reeeeeeeel" target="_blank">
                        <Icon icon="mingcute:instagram-fill" width="32" height="32" />
                    </a>
                </div>
            </div>

            <div class="col profile-cont">
                <img src="../assets/profile.png" alt="profile">
            </div>
        </div>

        <div id="projects">
            <h1 style="font-family: 'Changa One', sans-serif; margin-bottom: 8px;">Projects</h1>

            <div class="row g-0">
                <div class="col">
                    <div class="card">
                        <div class="card-header">DNSC Findr (Final)</div>
                        <div class="card-body">
                            <img src="../assets/projects/DNSCFNDR.png" alt="Reload">
                        </div>
                        <div class="card-footer">
                            A web-based application that helps students find their lost items.
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">DNSC Findr (UI)</div>
                        <div class="card-body">
                            <img src="../assets/projects/DNSCFNDR.png" alt="Reload">
                        </div>
                        <div class="card-footer">
                            A web-based application that helps students find their lost items.
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">Online Paluwagan System</div>
                        <div class="card-body">
                            <img src="../assets/projects/OPS.png" alt="Reload">
                        </div>
                        <div class="card-footer">
                            A desktop-based application that helps manage paluwagan transactions.
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header">Simple Ordering System</div>
                        <div class="card-body">
                            <img src="../assets/projects/SOS.png" alt="Reload">
                        </div>
                        <div class="card-footer">
                            A web-based application that helps manage orders in a restaurant.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="about">
            <h1 style="font-family: 'Changa One', sans-serif; margin-bottom: 8px;">About Me</h1>
            <p>This is about section</p>
        </div>

        <div id="contact">
            <h1 style="font-family: 'Changa One', sans-serif; margin-bottom: 8px;">Contact Me</h1>
            <form action="https://formsubmit.co/fc7edbabf57d93ec3a7604557c91ee6d" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit" class="btn">Send</button>
            </form>
        </div>

    </div>
</template>


<script setup>

</script>

<style scoped>
.layout {
    padding: 0;
    margin: 0;
    display: flex;
    flex-direction: column;
    gap: 38px;
}

#hero {
    height: calc(100vh - 120px);
    display: flex;
    align-items: center;
    justify-content: space-between;
    box-sizing: border-box;
}

#hero .intro-cont {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
}

#hero .intro-cont h1 {
    font-family: "Changa One", sans-serif;
    font-size: clamp(64px, 6vw, 84px);
    white-space: nowrap;
    overflow: hidden;
    margin-bottom: 18px;
    animation: typingH 3s steps(38, end) forwards, blink 0.75s step-end infinite;
}

#hero .intro-cont p {
    font-size: clamp(16px, 4vw, 16px);
    font-weight: 300;
    white-space: nowrap;
    overflow: hidden;
    animation: typingP 3s steps(32, end) forwards, blink 0.75s step-end infinite;
}

@keyframes typingH {
    from {
        width: 0;
    }

    to {
        width: 12ch;
    }
}

@keyframes typingP {
    from {
        width: 0;
    }

    to {
        width: 40ch;
    }
}

#hero .intro-cont .action-buttons {
    display: flex;
    gap: 8px;
    margin-top: 12px;
}

#hero .intro-cont .action-buttons .btn {
    color: #f2f2f2;
    outline: none;
    border: none;
    padding: 8px 12px;
    border-radius: 12px;
}

#hero .intro-cont .action-buttons .primary-btn {
    background-color: #1E90FF;
}

#hero .intro-cont .action-buttons .primary-btn:hover {
    background-color: #1877d6;
}

#hero .intro-cont .action-buttons .secondary-btn {
    border: 2px solid #1E90FF;
}

#hero .intro-cont .action-buttons .secondary-btn.secondary-btn:hover {
    border: 2px solid #1E90FF;
    background-color: #1E90FF;
}

#hero .intro-cont .social-links {
    display: flex;
    gap: 8px;
    margin-top: 48px;
}

#hero .intro-cont .social-links a {
    color: #1E90FF;
}

#hero .intro-cont .social-links a:hover {
    color: #1877d6;
}

#hero .profile-cont {
    display: flex;
    align-items: center;
    justify-content: center;
}

#hero .profile-cont img {
    width: 690px;
    height: auto;
    filter: drop-shadow(0 10px 10px rgba(30, 144, 255, 0.5));
    transition: filter 0.3s, transform 0.3s;
    cursor: pointer;
}

@media (max-width: 1400px) {
    #hero {
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    #hero .profile-cont {
        display: none !important;
    }

    #hero .intro-cont {
        align-items: center;
    }
}

#hero .profile-cont img:hover {
    transform: translateY(-5px);
    filter: drop-shadow(0 20px 20px rgba(30, 144, 255, 0.7));
}

#projects .row {
    display: flex;
    gap: 18px;
    flex-wrap: wrap;
    justify-content: center;
}

#projects .col {
    flex: 1 1 calc(25% - 24px);
    min-width: 250px;
}

#projects .card {
    background-color: transparent;
    border: 2px solid #1E90FF;
    border-radius: 12px;
}

#projects .card .card-header,
#projects .card .card-body,
#projects .card .card-footer {
    border: none;
    background-color: transparent;
}

#projects .card .card-header {
    font-size: 18px;
    text-align: center;
    color: #1E8CF8;
}

#projects .card .card-footer {
    text-align: center;
    color: #f2f2f2;
}

#projects .card img {
    width: 100%;
    height: 250px;
    object-fit: cover;
    border-radius: 8px;
}

form {
    max-width: 500px;
}

form label {
    margin-bottom: 6px;
    color: #f2f2f2;
}

form input,
form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 12px;
    border: #1E90FF 2px solid;
    border-radius: 12px;
    outline: none;
    background-color: transparent;
    color: #f2f2f2;
}

form input:focus,
form textarea:focus {
    border-color: #007bff;
}

form textarea {
    min-height: 120px;
    resize: none;
}

form button {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 12px;
    background: #007bff;
    color: white;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
}

form button:hover {
    background: #0056b3;
}
</style>
