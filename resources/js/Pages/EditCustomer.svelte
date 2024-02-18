<script>
    import Layout from '@/Shared/Layout.svelte'
    import {router, inertia} from '@inertiajs/svelte'

    export let errors;
    export let customer;

    function submit(id){
        router.put('/customers/'+id, customer)
    };
</script>

<Layout>
    <div class="card offset-3 col-6">
        <h5 class="card-header">Create New Customer</h5>
        <div class="card-body">
            <form on:submit|preventDefault={submit(customer.id)}>
                <div class="mb-3">
                  <label for="name" class="form-label fw-bold">Name</label>
                  <input bind:value={customer.name} type="text" class="form-control" id="name">
                  {#if errors.name}
                  <div class="text-danger">{errors.name}</div>
                  {/if}
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label fw-bold">Email</label>
                  <input bind:value={customer.email} type="email" class="form-control" id="email">
                  <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                  {#if errors.email}
                  <div class="text-danger">{errors.email}</div>
                  {/if}
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label fw-bold">Phone</label>
                  <input bind:value={customer.phone} type="text" class="form-control" id="phone">
                  {#if errors.phone}
                  <div class="text-danger">{errors.phone}</div>
                  {/if}
                </div>
                <a use:inertia href="/customers" class="btn btn-secondary float-start" >Back</a>
                <button type="submit" class="btn btn-primary float-end">Submit</button>
            </form>
        </div>
      </div>
    
</Layout>