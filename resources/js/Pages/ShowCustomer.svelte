<script>
    import Layout from '@/Shared/Layout.svelte'
    import { inertia } from '@inertiajs/svelte';
    export let customer
</script>

<Layout>
    <div class="card col-6 offset-3">
        <div class="card-header fw-bold">
            Customer details
        </div>
        <div class="card-body">
            <p>Name: {customer.name}</p>
            <p>Email: {customer.email}</p>
            <p>Phone: {customer.phone}</p>
        </div>
        <a use:inertia href="/customers" class="btn btn-primary">Back</a>
    </div>
</Layout>