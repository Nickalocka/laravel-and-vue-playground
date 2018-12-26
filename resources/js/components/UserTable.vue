<template>
    <table :class="table_class" class="table _stack-md">
        <colgroup>
            <col>
            <col>
            <col>
            <col>
            <col>
            <!--doing this here instead of on the td itself means it doesnt apply when display:block is added by breakpoints-->
            <col style="width: 39px;">
        </colgroup>
        <thead>
        <tr>
            <th>
                Name
            </th>
            <th>
                Email
            </th>
            <th>
                Phone
            </th>
            <th>
                City
            </th>
            <th colspan="2">
                Postcode
            </th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="user in users">
            <td data-th="Name:">
                {{ user.first_name }} {{ user.second_name }}
            </td>
            <td data-th="Email:">
                {{ user.email }}
            </td>
            <td data-th="Phone:">
                {{ user.phone }}
            </td>
            <td data-th="City:">
                {{ user.city }}
            </td>
            <td data-th="Postcode:">
                {{ user.postcode }}
            </td>
            <td data-th="View:" class="align-right">
                <a class="link-primary" :href="'/user/'+user.id">
                    <i class="fas fa-search"></i>
                </a>
            </td>
        </tr>
        </tbody>
    </table>
</template>

<script>
    export default {
        props: [
                'users',
                'table_class',
        ],
    }
</script>