<script>
    import Layout from '@/Shared/Layout.svelte'
    export let customers;
</script>

<svelte:head>
    <title>Customers</title>
</svelte:head>
<Layout>
    <table class="table">
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
            {#each customers as customer}
                <tr>
                    <th scope="row">{customer.id}</th>
                    <td>{customer.name}</td>
                    <td>{customer.email}</td>
                    <td>{customer.phone}</td>
                    <td>
                        <button class="btn btn-info">View</button>
                        <button class="btn btn-primary">Edit</button>
                        <button class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            {/each}
        </tbody>
      </table>
</Layout>