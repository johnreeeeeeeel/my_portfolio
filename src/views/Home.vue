<template>
    <div class="container-fluid layout">

        <div id="hero" class="row">
            <div class="col">
                <h1>Hi I am Johnrel</h1>

                <div style="margin-bottom: 18px; text-align: center;">
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

            <div class="col">
                <img src="../assets/profile.png" alt="profile">
            </div>
        </div>

        <div id="projects">
            <h1 class="section-title">MY PROJECTS</h1>

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

        <div id="about" class="row g-0">
            <div class="col">
                <h1 class="section-title">ABOUT ME</h1>
                <p>Hello World!</p>
                <h1 class="name">I'm Feby Johnrel R. Malbino</h1>
                <p>A passionate BSIT student with a love for coding, design, and filmmaking. I enjoy capturing stunning
                    visuals and turning them into stories. When I'm not coding or designing, you can find me in the
                    street rinding my bicycle or in the court smashing shuttlecock. I'm always eager to learn new skills
                    and take on exciting projects that challenge me to grow both personally and professionally.</p>

                <div class="action-buttons">
                    <a href="/src/assets/files/cv.pdf" download="Malbino_CV.pdf" class="btn secondary-btn">
                        <Icon icon="mingcute:download-2-fill" />
                        Download CV
                    </a>
                    <a href="/src/assets/files/resume.pdf" download="Malbino_Resume.pdf" class="btn secondary-btn">
                        <Icon icon="mingcute:download-2-fill" />
                        Download Resume
                    </a>
                </div>
            </div>

            <div class="col">
                <img src="../assets/hobby_skills.png" alt="profile">
            </div>
        </div>

        <div id="contact" class="row">
            <div class="col">
                <h1 class="section-title">CONTACT ME</h1>

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

            <div class="col">
                <form action="https://formsubmit.co/fc7edbabf57d93ec3a7604557c91ee6d" method="POST">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>

                    <button type="submit" class="btn">
                        <Icon icon="mingcute:send-fill" />
                        Send Message
                    </button>
                </form>
            </div>
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
    min-height: calc(100vh - 120px);
    display: flex;
    justify-content: space-between;
    gap: 48px;
    box-sizing: border-box;
}

#hero .col:nth-child(1),
#hero .col:nth-child(2) {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    flex: 1 1 300px;
}

#hero .col:nth-child(1) h1 {
    font-family: "Changa One", sans-serif;
    font-size: clamp(38px, 6vw, 84px);
    white-space: nowrap;
    overflow: hidden;
    margin-bottom: 18px;
    animation: typingH 3s steps(38, end) forwards, blink 0.75s step-end infinite;
}

#hero .col:nth-child(1) p {
    font-size: clamp(8px, 4vw, 16px);
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
        width: 38ch;
    }
}

#hero .col:nth-child(1) .action-buttons {
    display: flex;
    gap: 8px;
    margin-top: 12px;
}

.btn {
    color: #f2f2f2;
    outline: none;
    border: none;
    padding: 8px 12px;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 6px;
    font-size: 16px;
}

.primary-btn {
    background-color: #1E90FF;
}

.primary-btn:hover {
    background-color: #1877d6;
}

.secondary-btn {
    border: 2px solid #1E90FF;
}

.secondary-btn.secondary-btn:hover {
    border: 2px solid #1E90FF;
    background-color: #1E90FF;
}

#hero .col:nth-child(1) .social-links {
    display: flex;
    gap: 8px;
    margin-top: 48px;
}

#hero .col:nth-child(1) .social-links a {
    color: #1E90FF;
}

#hero .col:nth-child(1) .social-links a:hover {
    color: #1877d6;
}

#hero .col:nth-child(2) img {
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

    #hero .col:nth-child(2) {
        display: none !important;
    }

    #hero .col:nth-child(1) {
        align-items: center;
    }
}

#hero .col:nth-child(2) img:hover {
    transform: translateY(-5px);
    filter: drop-shadow(0 20px 20px rgba(30, 144, 255, 0.7));
}

#projects {
    min-height: 100vh;
    padding-top: 60px;
    display: flex;
    flex-direction: column;
    box-sizing: border-box;
}

#projects .section-title {
    font-family: "Changa One", sans-serif;
    font-size: clamp(38px, 6vw, 84px);
    margin-bottom: 18px;
    color: #1E90FF;
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
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.6);
    transition: 0.3s ease;
    cursor: pointer;
}

#projects .card:hover {
    box-shadow: 0 8px 20px rgba(30, 144, 255, 0.6);
    transform: translateY(-3px);
    transition: 0.3s ease;
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

#about {
    min-height: 100vh;
    padding-top: 60px;
    display: flex;
    justify-content: space-between;
    gap: 48px;
    box-sizing: border-box;
}

#about .col {
    flex: 1 1 300px;
}

#about .col .section-title {
    font-family: "Changa One", sans-serif;
    font-size: clamp(38px, 6vw, 84px);
    margin-bottom: 18px;
    color: #1E90FF;
}

#about .col:nth-child(1) .name {
    font-family: "Changa One", sans-serif;
    font-size: clamp(12px, 6vw, 38px);
    white-space: nowrap;
    overflow: hidden;
    margin-bottom: 18px;
}

#about .col:nth-child(1) p {
    text-align: justify;
    font-size: clamp(8px, 4vw, 16px);
    font-weight: 300;
    overflow: hidden;
}

#about .col:nth-child(1) .action-buttons {
    margin-top: 28px !important;
    display: flex;
    gap: 8px;
    margin-top: 12px;
}

#about img {
    max-width: 100%;
    height: auto;
    display: block;
}

#about img {
    width: 100%;
    border-radius: 12px;
    display: block;
    margin-top: 12px;
}

#contact {
    min-height: 100vh;
    padding-top: 60px;
    display: flex;
    justify-content: space-between;
    gap: 48px;
    box-sizing: border-box;
}

#contact .col:nth-child(1),
#contact .col:nth-child(2) {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    flex: 1 1 300px;
}

#contact .col:nth-child(1) .section-title {
    font-family: "Changa One", sans-serif;
    font-size: clamp(38px, 6vw, 84px);
    color: #1E90FF;
}

#contact .col:nth-child(1) .social-links {
    display: flex;
    gap: 8px;
}

#contact .col:nth-child(1) .social-links a {
    color: #1E90FF;
}

#contact .col:nth-child(1) .social-links a:hover {
    color: #1877d6;
}

#contact .col:nth-child(2) form {
    max-width: 450px;
}

#contact .col:nth-child(2) form label {
    margin-bottom: 6px;
    color: #f2f2f2;
}

#contact .col:nth-child(2) form input,
#contact .col:nth-child(2) form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 12px;
    border: 2px solid #1877D6;
    border-radius: 12px;
    outline: none;
    color: #f2f2f2;
    background-color: transparent;
}

#contact .col:nth-child(2) form input:focus,
#contact .col:nth-child(2) form textarea:focus {
    border-color: #007bff;
}

#contact .col:nth-child(2) form textarea {
    min-height: 120px;
    resize: none;
}

#contact .col:nth-child(2) form button {
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

#contact .col:nth-child(2) form button:hover {
    background: #0056b3;
}
</style>
