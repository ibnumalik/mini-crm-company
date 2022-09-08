<template>
  <Link :href="to">
    <slot />
  </Link>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue';

export default {
  components: { Link },
  props: ['to'],
};
</script>
