<template>
    <section class="header">
        <nav>
            <a href="/"><img v-bind:src="image"></a>
            <div class="nav-links">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#course">Nossos treinos</a></li>
                    <li><a href="#resultados">Foco em resultados</a></li>
                    <li><a href="/login">Login</a></li>
                </ul>
            </div>
        </nav>
        <div class="text-box">
            <h1>Wellness</h1>
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, <br>
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
            <a href="#course" class="hero-btn">Conheça nossos treinos</a>
        </div>
    </section>
</template>
<script>
    export default {
        mounted() {
            
        },
        props: {
            image: {
                type: String,
                required: true
            }
        }
    }
</script>
