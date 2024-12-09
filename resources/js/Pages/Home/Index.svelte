<script>
    import Layout from "../Layouts/App.svelte"
    let { name, age } = $props();
</script>

<Layout>
    <div class="text-center font-bold text-4xl">
        <h1>Laravel + Svelte</h1>
        <p class="text-2xl">Hello {name} ({age})</p>
    </div>
</Layout>
