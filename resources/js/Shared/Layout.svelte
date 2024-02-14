<script>
    import Header from '@/Shared/Header.svelte'
    import Footer from '@/Shared/Footer.svelte'
</script>

<Header/>

<div class="container">
    <slot/>
</div>

<Footer/>