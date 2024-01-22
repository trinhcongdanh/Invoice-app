import { createRouter,createWebHistory } from "vue-router";
import invoiceIndex from "../components/invoices/index.vue";
import notFound from "../components/NotFound.vue";
import createNewInvoice from "../components/invoices/createNewInvoice.vue";

const routes=[
    {
        path:"/",
        component:invoiceIndex
    },
    {
        path:"/invoice/new",
        component:createNewInvoice
    },
    {
        path:"/:pathMatch(.*)*",
        component:notFound
    }
]

const router = createRouter({
    history: createWebHistory(),
    routes
})

export default router;