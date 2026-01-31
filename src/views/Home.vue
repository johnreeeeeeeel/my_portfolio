<template>
    <div class="container-fluid layout">

        <div id="hero" class="row">
            <div class="col intro-cont">
                <h1>Hi I am Feby Johnrel R. Malbino</h1>
                <p>I love <span>Designing</span> and still <span>learning</span> :></p>

                <div class="action-buttons">
                    <button type="button" class="btn primary-btn">About Me</button>
                    <button type="button" class="btn secondary-btn">Contact</button>
                </div>
            </div>

            <div class="col profile-cont">
                <img src="../assets/profile.png" alt="profile">
            </div>
        </div>

        <div id="projects">
            <h1>Projects</h1>

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
            <h1>About</h1>
            <p>This is about section</p>
        </div>

        <div id="contact">
            <h1>Contact</h1>
            <p>This is contact section</p>
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
    font-size: clamp(28px, 6vw, 56px);
    white-space: nowrap;
    overflow: hidden;
    border-right: 2px solid #1E90FF;
    animation: typingH 3s steps(38, end) forwards, blink 0.75s step-end infinite;
}

#hero .intro-cont p {
    font-size: clamp(16px, 4vw, 28px);
    white-space: nowrap;
    overflow: hidden;
    border-right: 2px solid #1E90FF;
    animation: typingP 3s steps(32, end) forwards, blink 0.75s step-end infinite;
}

#hero .intro-cont p span:first-child {
    animation: rainbow 1s linear infinite;
}

#hero .intro-cont p span:last-child {
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

#projects .card .card-header,
#projects .card .card-body,
#projects .card .card-footer {
    border: none;
    background-color: #f2f2f2;
}

#projects .card .card-header {
    font-size: 18px;
    text-align: center;
    color: #1E8CF8;
}

#projects .card .card-footer {
    text-align: center;
    color: #555;
}

#projects .card img {
    width: 100%;
    height: 250px;  
    object-fit: cover;
    border-radius: 8px;
}


@keyframes typingH {
    from {
        width: 0;
    }

    to {
        width: 28ch;
    }
}

@keyframes typingP {
    from {
        width: 0;
    }

    to {
        width: 32ch;
    }
}

@keyframes blink {
    50% {
        border-color: transparent;
    }
}

@keyframes rainbow {
    0% {
        color: #FF0000;
    }

    16% {
        color: #FF7F00;
    }

    32% {
        color: #FFFF00;
    }

    48% {
        color: #00FF00;
    }

    64% {
        color: #0000FF;
    }

    80% {
        color: #4B0082;
    }

    100% {
        color: #FF00FF;
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
    padding: 4px 12px;
    font-size: clamp(16px, 2.5vw, 20px);
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
</style>
