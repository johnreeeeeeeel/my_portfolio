<template>
    <header>

        <nav>
            <div class="logo-container">
                <a href="#home">
                    <img src="../assets/logo-dark.png" alt="logo">
                </a>
            </div>

            <div class="links-container">
                <a href="#hero">Home</a>
                <a href="#about">About</a>
                <a href="#portfolio">Portfolio</a>
                <a href="#contact">Contact</a>
            </div>

            <div class="dropdown links-dropdown">
                <button type="button" class="btn" data-bs-toggle="dropdown">
                    <Icon icon="material-symbols:menu-rounded" width="32" height="32" />
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#hero">Home</a></li>
                    <li><a class="dropdown-item" href="#about">About</a></li>
                    <li><a class="dropdown-item" href="#portfolio">Portfolio</a></li>
                    <li><a class="dropdown-item" href="#contact">Contact</a></li>
                </ul>
            </div>
        </nav>

    </header>
</template>

<script setup>
</script>

<style scoped>
header {
    background-color: #191919;
    color: #f2f2f2;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 9999;
    height: 60px;
    display: flex;
    justify-content: center;
    padding: 0 24px;
}

header nav {
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    width: 100%;
}

/* Desktop */
@media (min-width: 1024px) {
    header .links-dropdown {
        display: none !important;
    }
}

/* Tablet + Mobile */
@media (max-width: 1023px) {
    header .links-container {
        display: none !important;
    }
}

header .logo-container img {
    width: auto;
    height: 48px;
    cursor: pointer;
}

header .links-container {
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 28px;
}

header .links-container a {
    font-size: 20px;
    color: white;
    text-decoration: none;
    transition: all 0.2s ease;
}

header .links-container a:hover {
    color: #1E90FF;
}

header .links-dropdown .btn {
    color: #f2f2f2;
    padding: 0;
    outline: none;
    border: none;
}

header .links-dropdown .dropdown-menu {
    padding: 8px;
    border-radius: 8px;
}

header .links-dropdown .dropdown-menu a {
    font-size: 20px;
    color: #242424;
    text-decoration: none;
    border-radius: 8px;
}
</style>
