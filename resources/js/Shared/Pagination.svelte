<script>
    import { inertia } from "@inertiajs/svelte";
    export let links;
</script>

<nav aria-label="Page navigation example">
    {#if links && links.length !==3}
    <ul class="pagination justify-content-center">
        {#each links as link}

        {#if link.url===null}
            <li class="page-item">
                <a use:inertia href="{link.url}" class="page-link" >
                    <span aria-hidden="true">{@html link.label}</span>
                </a>
            </li>
        {:else} 
            <li class={link.active? 'page-item active':'page-item'}>
                <a class="page-link" href="{link.url}">{@html link.label}</a>
            </li>
        {/if}
        
      {/each}
    </ul>
    {/if}
  </nav>