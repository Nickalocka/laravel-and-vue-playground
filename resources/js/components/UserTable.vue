<template>
    <table :class="table_class" class="table _stack-md">
        <colgroup>
            <col>
            <col>
            <col>
            <col>
            <col>
            <!--doing this here instead of on the td itself means it doesnt apply when display:block is added by breakpoints-->
            <col style="width: 70px;">
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
        <template v-for="user in users">
            <tr>
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
                <td class="align-right">
                    <a class="link-primary" :href="'/user/'+user.id">
                        <i class="fas fa-search"></i>
                    </a>
                    <a class="link-primary" v-on:click="toggle_row(user.id)">
                        <i class="fas fa-chevron-down"></i>
                    </a>
                </td>
            </tr>
            <tr :data-detail-row="user.id" class="detail-row hidden">
                <td colspan="6">
                    <div class="box _bordered">
                        <strong>Address:</strong>
                        <p>
                            {{ user.address_1 }} <br/>
                            <template v-if="user.address_2">
                                {{ user.address_2 }} <br/>
                            </template>
                            <template v-if="user.address_3">
                                {{ user.address_3 }} <br/>
                            </template>
                            {{ user.city }} <br/>
                            {{ user.postcode }} <br/>
                        </p>
                    </div>
                </td>
            </tr>
        </template>
        </tbody>
    </table>
</template>

<script>
    export default {
        props: [
            'users',
            'table_class',
        ],
        methods: {
            toggle_row: function (user_id) {
                var detail_row = $('[data-detail-row=' + user_id + ']');
                detail_row.toggleClass('hidden');
            }
        }
    }
</script>