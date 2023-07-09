<script>
</script>

<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
        <div class="container px-5">
            <router-link :to="{ name: 'home'}" class="navbar-brand">
                <span class="fw-bolder text-primary">Giovanni Crudele</span>
            </router-link>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">
                    <li class="nav-item">
                        <router-link :to="{ name: 'home' }" class="nav-link">Home</router-link>
                    </li>
                    <li class="nav-item">
                      <router-link :to="{ name: 'resume' }" class="nav-link">Competenze</router-link> 
                    </li>
                    <li class="nav-item">
                        <router-link :to="{ name: 'projects' }" class="nav-link">Progetti</router-link> 
                    </li>
                    <li class="nav-item">
                        <router-link :to="{name: 'contacts' }" class="nav-link">Contatti</router-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<style>

</style>