<template>
  <div>
    <b-row class="mb-3">
      <!-- Item per page select -->
      <b-col cols="12" xl="3">
        <b-form-group
          label="Per page"
          label-cols-sm="6"
          label-cols-md="4"
          label-cols-lg="3"
          label-align-sm="right"
          label-size="sm"
          label-align="right"
          label-for="perPageSelect"
          class="mb-0"
        >
          <b-form-select v-model="perPage" id="perPageSelect" size="sm" :options="pageOptions"></b-form-select>
        </b-form-group>
      </b-col>
      <!-- Search table -->
      <b-col cols="12" xl="3" class="ml-auto">
        <b-form-group
          label="Search"
          label-cols="6"
          label-cols-md="4"
          label-cols-xl="3"
          label-for="search"
        >
          <b-form-input v-model="filter" type="search" id="search"></b-form-input>
        </b-form-group>
      </b-col>
    </b-row>
    <b-table
      :fields="fields"
      :items="data"
      :per-page="perPage"
      :filter="filter"
      :current-page="currentPage"
      @filtered="onFiltered"
    >
      <template v-slot:cell(actions)="data">
        <b-button size="sm" variant="light" :href="`companies/${data.item.id}/edit`">Edit</b-button>
        <form class="d-inline-block" :action="`companies/${data.item.id}`" method="post">
          <input type="hidden" name="_token" :value="csrfToken" />
          <input type="hidden" name="_method" value="DELETE" />

          <b-button variant="danger" size="sm" type="submit">Delete</b-button>
        </form>
      </template>
    </b-table>
    <b-pagination v-model="currentPage" :total-rows="totalRows" :per-page="perPage" limit="10"></b-pagination>

  </div>
</template>

<script>
import {
  BTable,
  BPagination,
  BRow,
  BCol,
  BFormGroup,
  BFormSelect,
  BFormInput,
  BButton
} from "bootstrap-vue";

export default {
  components: {
    BButton,
    BFormInput,
    BFormGroup,
    BFormSelect,
    BCol,
    BRow,
    BTable,
    BPagination
  },
  props: {
    data: Array
  },
  data() {
    return {
      fields: [
        {
          key: "name",
          sortable: true
        },
        "email",
        "website",
        "actions"
      ],
      perPage: 5,
      filter: null,
      currentPage: 1,
      totalRows: 1,
      pageOptions: [5, 10, 25, 50, 100],
      csrfToken: null
    };
  },
  mounted() {
    this.csrfToken = document.querySelector('meta[name="csrf-token"]').content;

    this.totalRows = this.data.length;
  },
  methods: {
    onFiltered(filteredItems) {
      this.totalRows = filteredItems.length;
      this.currentPage = 1;
    }
  }
};
</script>

<style>
</style>
