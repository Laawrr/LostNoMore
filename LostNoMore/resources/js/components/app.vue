<template>
    <h1>Hello App !</h1>
    <p>
        <strong>Current route path:</strong>{{ $route.fullPath }}
    </p>
    <nav>
        <div>
            <router-link class="link" to="/">Home</router-link>
            <router-link class="link" to="/about">About</router-link>
        </div>
    </nav>
    <main>
        <router-view/>
    </main>
</template>