<template>
    <div>
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" @click="openModal">
        Launch demo modal
      </button>
  
      <!-- Modal -->
      <div class="modal fade" ref="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" @click="closeModal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              Your content here...
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" @click="closeModal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    methods: {
      openModal() {
        const modal = new bootstrap.Modal(this.$refs.myModal);
        modal.show();
      },
      closeModal() {
        const modal = bootstrap.Modal.getInstance(this.$refs.myModal);
        if (modal) modal.hide();
      }
    } 
  }
  </script>
  