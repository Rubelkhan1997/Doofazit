<template id="">
  <span>
    <div class="card p-0 col-10  offset-1">
      <div class="card-header" style="background:rgba(221, 221, 221, 0.20);border:1px solid rgba(0, 0, 0, 0.05)">
        <h3 style="color:black">Setting</h3>
      </div>
      <div class="setting p-md-5 p-3">
        <form>
            <div class="row pb-2">
              <div class="col  pr-0">
                <label>Full Name</label>
              </div>
              <div class="col pl-0">
                <input type="text" class="form_control" value="Md.Saiful Ismal">
              </div>
            </div>
            <div class="row pb-2">
              <div class="col  pr-0">
                <label>Email</label>
              </div>
              <div class="col pl-0">
                <input type="text" class="form_control" value="saiful@gmail.com">
              </div>
            </div>
            <div class="row pb-2">
              <div class="col  pr-0">
                <label>Account Name</label>
              </div>
              <div class="col pl-0">
                <input type="text" class="form_control" placeholder="Last name" value="123423432">
              </div>
            </div>


            <div class="mt-3">
              <button type="button" class="mr-2 btn-pill btn-hover-shine btn btn-primary">Add Information</button>
              <button type="button" class="btn-pill btn-hover-shine btn btn-light">Clear</button>
            </div>
        </form>
      </div>
    </div>
  </span>
</template>
<script>
    export default {

    }
</script>
<style media="screen">
  .setting label{
    font-size:15px;
    margin-top:7px;
  }
</style>
