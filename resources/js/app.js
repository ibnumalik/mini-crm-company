import Vue from "vue";
import { createInertiaApp } from '@inertiajs/inertia-vue'
import { InertiaProgress } from '@inertiajs/progress'
import {
    BAlert,
    BButton,
    BCard,
    BCardBody,
    BCardText,
    BCol,
    BCollapse,
    BContainer,
    BDropdownDivider,
    BDropdownItem,
    BListGroup,
    BListGroupItem,
    BNav,
    BNavbar,
    BNavbarBrand,
    BNavbarNav,
    BNavbarToggle,
    BNavItem,
    BNavItemDropdown,
    BRow,
    VBToggle,
    BCardTitle,
    BCardGroup,
    BTable
} from "bootstrap-vue";
import ImageFilterIcon from "icons/ImageFilter";
import EmailOutlineIcon from "icons/EmailOutline";
import CalendarIcon from "icons/Calendar";
import EmailVariantIcon from "icons/EmailVariant";
import AlertCircleOutlineIcon from "icons/AlertCircleOutline";
import CommentTextOutlineIcon from "icons/CommentTextOutline";
import BellRingIcon from "icons/BellRing";
import DomainIcon from "icons/Domain";
import AccountMultipleIcon from "icons/AccountMultiple";
import ViewDashboardIcon from "icons/ViewDashboard";
import CubeIcon from "icons/Cube";
import AccountLockIcon from "icons/AccountLock";
import AlertOctagonIcon from "icons/AlertOctagon";
import AccountGroupIcon from "icons/AccountGroup";

import CompanyDataTable from "./components/CompanyDataTable";

import "icons/styles.css";

const icons = {
    AlertOctagonIcon,
    AccountGroupIcon,
    CubeIcon,
    AccountLockIcon,
    ImageFilterIcon,
    EmailOutlineIcon,
    CalendarIcon,
    EmailVariantIcon,
    AlertCircleOutlineIcon,
    CommentTextOutlineIcon,
    BellRingIcon,
    DomainIcon,
    AccountMultipleIcon,
    ViewDashboardIcon
};

const bootstrap = {
    BTable,
    BCardGroup,
    BCardTitle,
    BAlert,
    BButton,
    BCard,
    BCardBody,
    BCardText,
    BCol,
    BCollapse,
    BContainer,
    BDropdownDivider,
    BDropdownItem,
    BListGroup,
    BListGroupItem,
    BNav,
    BNavbar,
    BNavbarBrand,
    BNavbarNav,
    BNavbarToggle,
    BNavItem,
    BNavItemDropdown,
    BRow
};

function registerVueComponent(components) {
    Object.entries(components).forEach(([key, value]) => {
        Vue.component(key, value);
    });
}

registerVueComponent(bootstrap);
registerVueComponent(icons);
InertiaProgress.init()
Vue.prototype.$route = route

createInertiaApp({
    resolve: name => require(`./Pages/${name}`),
    setup({ el, App, props }) {
        new Vue({
            render: h => h(App, props),
            data: {
                companyLogoPreview: null
            },
            components: {
                CompanyDataTable
            },
            directives: {
                "b-toggle": VBToggle
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
        }).$mount(el)
    }
})