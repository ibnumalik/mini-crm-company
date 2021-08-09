<template>
<div class="main-panel">
    <div class="content-wrapper">
        <b-container fluid>
            <b-row>
                <b-col>
                    <b-card title="List companies">
                        <company-data-table :data='companies'></company-data-table>
                    </b-card>
                </b-col>
            </b-row>
        </b-container>
    </div>
</div>
</template>

<script>
import Layout from '../../layouts/dashboard'

export default {
    layout: Layout,
    props: ['companies']
}
</script>