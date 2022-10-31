<template>
    <div class="main-panel">
        <div class="content-wrapper">
            <b-container fluid>
                <b-row>
                    <b-col cols="12" lg="4">
                        <b-card>
                            <b-card-title>
                                Profile
                            </b-card-title>
                            <b-form>
                                <b-form-group label="Email" label-for="input1">
                                    <b-form-input type="email" id="input1" placeholder="Email address">
                                    </b-form-input>
                                </b-form-group>
                                <b-form-group label="Password" label-for="input2">
                                    <b-form-input type="password" id="input2" placeholder="Password"></b-form-input>
                                </b-form-group>
                                <b-button type="submit" variant="success" class="mr-2">Submit</b-button>
                                <b-button variant="light">Cancel</b-button>
                            </b-form>
                        </b-card>
                    </b-col>
                </b-row>
            </b-container>
        </div>
    </div>
</template>

<script>
import Layout from '../layouts/dashboard.vue';

export default {
    layout: Layout,
};
</script>
