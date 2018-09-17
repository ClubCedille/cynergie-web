<template>
    <div id="list" class="container">
        <table class="table   table-hover">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Controller</th>
                <th scope="col">Address</th>
                <th scope="col">Date</th>
                <th scope="col">Generate</th>
                <th scope="col">Csv files</th>
                <th scope="col">Json files</th>
            </tr>
            </thead>
            <tbody>
            <tr v-for="counter in countersInfo" :key="counter.index">
                <th scope="row"> {{counter.index}}</th>
                <td> {{ counter.name }} </td>
                <td> {{ counter.address }} </td>
                <td><input type="date" v-model="countersInfo[counter.index].date" placeholder="enter date"/></td>
                <td>
                    <button class="bg-danger" style="" :id="counter.index"
                            v-on:click="download(counter.name, counter.index,countersInfo[counter.index].date)">Generate

                    </button>
                </td>
                <td><a :href="counter.csvlink" :download="counter.filenamecsv" v-if="counter.filenamecsv!==''"><i
                        class="fas fa-download fa-2x"></i></a>
                </td>
                <td><a :href="counter.jsonlink" :download="counter.filenamejson"
                       v-if="counter.filenamecsv!==''"><i class="fas fa-download fa-2x"></i></a></td>
            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>

    export default {
        name: "list",
        props: {
            counters: Array,
            filterurl: String,
            metricsurl: String,
        },
        data() {
            return {

                filtername: "",
                countersInfo: [],
            }
        },
        async created() {
            var self = this;
            var i;
            for (i = 0; i < self.counters.length; i++) {
                var counter = {
                    index: i,
                    name: self.counters[i].name,
                    address: self.counters[i].address,
                    json: "",
                    jsonlink: "",
                    csvlink: "",
                    filenamecsv: "",
                    filenamejson: "",
                    date: ""
                };
                self.countersInfo.push(counter);
            }

        },
        methods: {

            download: function (name, index,date) {

                var self = this;

            if(date!==""){


                axios.get(self.metricsurl + "/?counter=" + name + "&date="+date)
                    .then(response => {
                        self.countersInfo[index].json = response.data;
                        self.countersInfo[index].jsonlink = "data:text/json;charset=utf-8," + self.countersInfo[index].json;
                        self.countersInfo[index].filenamejson = name + "-" + new Date().toLocaleTimeString() + ".json";
                        self.convertTocsv(name, index)
                    })
                    .catch(error => {
                        console.log(error.response.data);
                    });
            }

            },
            filter: function () {
                var self = this;
                axios.get(self.filterurl,
                    {
                        params:
                            {
                                filter: self.filtername
                            }
                    })
                    .then(response => {
                        console.log(response.data)
                        self.allcounters = response.data;

                    })
                    .catch(error => {
                        console.log(error.response.data);
                    });
            },
            convertTocsv: function (name, id) {
                var self = this;

                var arrData = typeof self.countersInfo[id].json !== 'object' ? JSON.parse(self.countersInfo[id].json) : self.countersInfo[id].json;
                var CSV = '';

                for (var i = 0; i < arrData.length; i++) {
                    var row = "";

                    for (var index in arrData[i]) {

                        if (row != '') row += ','

                        row += arrData[i][index];

                    }
                    CSV += row + '%0D%0A';
                }

                if (CSV == '') {
                    alert("Invalid data");
                    return;
                }

                self.countersInfo[id].csvlink = 'data:text/csv;charset=utf-8,' + CSV;
                self.countersInfo[id].filenamecsv = name + "-" + new Date().toLocaleTimeString() + ".csv";

            }
        },

    }
</script>

<style scoped>

    #list {

        margin-top: 30px;
    }

    button {
        background-color: cornflowerblue; /* Green */
        border: none;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 12px;
        margin: 4px 2px;
        cursor: pointer;
    }

</style>