<script type="text/x-template" id="contacts">
    <div>
        <h2>Component contacts</h2>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <td>Name</td>
                    <td>Phone</td>
                </tr>
            </thead>
            <tbody>
                <tr v-for="contact in contacts" :key="contact.id">
                    <td><router-link :to="'/contacts/' + contact.id">{{ contact.name }}</router-link></td>
                    <td>{{ contact.phone }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</script>