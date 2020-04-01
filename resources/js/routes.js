import detail from "./components/detail";

export const routes = [
    { path: "/movie/:slug", name: "singleMovie", component: detail }
];
export default routes;
