<script>
    import Layout from '@/Shared/Layout.svelte'
    import Pagination from '@/Shared/Pagination.svelte'
    import { inertia } from '@inertiajs/svelte';
    export let customers;
</script>

<svelte:head>
    <title>Customers</title>
</svelte:head>
<Layout>
    <table class="table table-small">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            {#each customers.data as customer}
                <tr>
                    <th scope="row">{customer.id}</th>
                    <td>{customer.name}</td>
                    <td>{customer.email}</td>
                    <td>{customer.phone}</td>
                    <td>
                        <button class="btn btn-info">View</button>
                        <a use:inertia href="/customers/{customer.id}/edit" class="btn btn-primary">Edit</a>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            {/each}
        </tbody>
      </table>
      <Pagination links="{customers.links}"/>

      <a href="/customers/create" use:inertia class="btn btn-primary btn-small">Create Customer</a>

</Layout>