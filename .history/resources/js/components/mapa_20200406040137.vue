<template>
  <div class="col-sm-4">
          <div class="card">
            <div class="card-header">
              <h3>Add a New Website</h3>
            </div>
            <div class="card-body">
              <form @submit.prevent="addWebsite">
                <div class="form-group">
                  <input type="text" class="form-control" v-model="newWebsite.name" placeholder="Name">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" v-model="newWebsite.author" placeholder="Author">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" v-model="newWebsite.url" placeholder="URL">
                </div>
                <button type="submit" class="btn btn-primary">
                  Save
                </button>
              </form>
            </div>
          </div>
        </div>
    </div>
</template>

<script>
export default {

}
</script>

<style>

</style>