<template>
<div class="main-panel">
    <div class="content-wrapper">
        <b-container fluid>
            <b-row>
                <b-col>
                    <b-card title="List companies">
                        <CompanyDataTable :data='companies'></CompanyDataTable>
                    </b-card>
                </b-col>
            </b-row>
        </b-container>
    </div>
</div>
</template>

<script>
import Layout from '../../layouts/dashboard'
import CompanyDataTable from '../../components/CompanyDataTable';

export default {
    layout: Layout,
    components: { CompanyDataTable },
    props: ['companies']
}
</script>