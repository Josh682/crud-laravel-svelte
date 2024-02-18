<script>
    import Layout from '@/Shared/Layout.svelte'
    import Pagination from '@/Shared/Pagination.svelte'
    import { inertia, router } from '@inertiajs/svelte';
    export let customers;

    function deleteCustomer(id){
        if(confirm("Are you sure to delete this customer?")){
            router.delete("/customers/"+id)
        }
    }
</script>

<svelte:head>
    <title>Customers</title>
</svelte:head>
<Layout>
    <table class="table table-small">
        <thead>
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            {#each customers.data as customer,i}
                <tr>
                    <th scope="row">{i+1}</th>
                    <td>{customer.id}</td>
                    <td>{customer.name}</td>
                    <td>{customer.email}</td>
                    <td>{customer.phone}</td>
                    <td>
                        <a use:inertia href="/customers/{customer.id}" class="btn btn-info">View</a>
                        <a use:inertia href="/customers/{customer.id}/edit" class="btn btn-primary">Edit</a>
                        <button on:click={()=>deleteCustomer(customer.id)} class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            {/each}
        </tbody>
      </table>
      <Pagination links="{customers.links}"/>

      <a href="/customers/create" use:inertia class="btn btn-primary btn-small">Create Customer</a>

</Layout>