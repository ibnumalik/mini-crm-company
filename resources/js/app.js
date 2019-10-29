import Vue from "vue";
import {
    BContainer,
    BNavbar,
    BNavbarBrand,
    BNavbarToggle,
    BCollapse,
    BNavbarNav,
    BNavItemDropdown,
    BDropdownItem,
    BDropdownDivider,
    BNavItem,
    VBToggle
} from "bootstrap-vue";


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: "#app",
    data: {
        companyLogoPreview: null
    },
    components: {
        BNavbar,
        BNavbarBrand,
        BContainer,
        BNavbarToggle,
        BCollapse,
        BNavbarNav,
        BNavItemDropdown,
        BDropdownItem,
        BDropdownDivider,
        BNavItem,
    },
    directives: {
        'b-toggle': VBToggle
    },
    methods: {
        companyLogoFileChanged(event) {
            const logo = event.target.files;

            if (logo && logo[0]) {
                let reader = new FileReader();

                reader.onload = e =>
                    (this.companyLogoPreview = e.target.result);

                reader.readAsDataURL(logo[0]);
            }
        },
        logout(event) {
            event.preventDefault();
            this.$refs.logoutForm.submit();
        }
    }
});
