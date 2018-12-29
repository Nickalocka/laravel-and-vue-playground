<template>
    <div>
        <div class="form-group">
            <label>Switch Class</label>
            <div class="checkboxes _inline">
                <label v-for="table_class in table_classes" class="checkbox">
                    <input type="checkbox" :value="table_class" v-on:click="toggle_table_class(table_class)">
                    {{table_class}}
                </label>
            </div>
        </div>
        <div class="form-group">
            <label>Toggle Columns</label>
            <div class="checkboxes _inline">
                <label v-for="(showing, table_col) in columns_showing" :key="table_col" class="checkbox">
                    <input type="checkbox" :value="table_col" :checked="columns_showing[table_col]" v-on:click="toggle_column_showing(table_col)">
                    {{table_col}}
                </label>
            </div>
        </div>
        <table class="table _stack-md" id="user_table">
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
                <th v-if="columns_showing['name']">
                    Name
                </th>
                <th data-th="Email:" v-if="columns_showing['email']">
                    Email
                </th>
                <th data-th="Phone:" v-if="columns_showing['phone']">
                    Phone
                </th>
                <th data-th="City:" v-if="columns_showing['city']">
                    City
                </th>
                <th data-th="Postcode:" v-if="columns_showing['postcode']">
                    Postcode
                </th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            <template v-for="user in users">
                <tr>
                    <td data-th="Name:" v-if="columns_showing['name']">
                        {{ user.first_name }} {{ user.second_name }}
                    </td>
                    <td data-th="Email:" v-if="columns_showing['email']">
                        {{ user.email }}
                    </td>
                    <td data-th="Phone:" v-if="columns_showing['phone']">
                        {{ user.phone }}
                    </td>
                    <td data-th="City:" v-if="columns_showing['city']">
                        {{ user.city }}
                    </td>
                    <td data-th="Postcode:" v-if="columns_showing['postcode']">
                        {{ user.postcode }}
                    </td>
                    <td class="align-right">
                        <a class="link-primary" :href="'/user/'+user.id">
                            <i class="fas fa-search"></i>
                        </a>
                        <a class="link-primary" v-on:click="toggle_row($event, user.id)">
                            <i class="fas fa-chevron-down"></i>
                        </a>
                    </td>
                </tr>
                <tr :data-detail-row="user.id" class="hidden">
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
    </div>
</template>

<script>
    export default {
        props: [
            'users',
        ],
        data () {
            return {
                table_classes: [
                    '_shaded',
                    '_bordered',
                    '_lined',
                ],
                columns_showing: {
                    'name': true,
                    'email': true,
                    'phone': true,
                    'city': true,
                    'postcode': true,
                },
            }
        },
        methods: {
            toggle_row: function (event, user_id) {

                var detail_row = $('[data-detail-row=' + user_id + ']');
                var chevron = $(event.currentTarget).find('.fas');

                chevron.toggleClass(function () {
                    if ($(this).hasClass('fa-chevron-down')) {
                        return "fa-chevron-up";
                    } else {
                        return "fa-chevron-down";
                    }
                });

                detail_row.toggleClass('hidden');

            },
            toggle_table_class: function (table_class) {
                $('#user_table').toggleClass(table_class);
            },
            toggle_column_showing: function (column_name) {

                if (this.columns_showing[column_name] == false) {
                    this.columns_showing[column_name] = true;
                } else {
                    this.columns_showing[column_name] = false;
                }
            },
        }
    }
</script>