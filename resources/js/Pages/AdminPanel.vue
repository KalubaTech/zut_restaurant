<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import DataTableComponent from '../Components/DataTableComponent.vue';
import { Modal } from 'bootstrap';
import { ref } from 'vue';

const myModal = ref(null);
const imageInput = ref(null);
const title = ref('');
const description = ref('');
const price = ref('');
const calories = ref(''); // New field for calories
const category = ref(''); // New field for category/type
const imageFile = ref(null);
const imagePreview = ref('assets/uploadimage.png'); // Set a default placeholder image path

// Get the CSRF token from the meta tag
const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

function openModal() {
  const modalInstance = new Modal(myModal.value);
  modalInstance.show();
}

function closeModal() {
  const modalInstance = Modal.getInstance(myModal.value);
  if (modalInstance) {
    modalInstance.hide();
  }
}

function triggerFileInput() {
  imageInput.value.click();
}

function handleFileUpload(event) {
  const file = event.target.files[0];
  if (file) {
    imageFile.value = file;
    const reader = new FileReader();
    reader.onload = (e) => {
      imagePreview.value = e.target.result; // Update the image preview source
    };
    reader.readAsDataURL(file); // Read the file as a data URL
  }
}

async function submitForm() {
  const formData = new FormData();
  formData.append('title', title.value);
  formData.append('description', description.value);
  formData.append('price', price.value);
  formData.append('calories', calories.value); // Append calories to the form data
  formData.append('type', category.value); // Append category/type to the form data
  if (imageFile.value) {
    formData.append('image', imageFile.value);
  }

  try {
    const response = await fetch('http://127.0.0.1:8000/uploadmenu', {
      method: 'POST',
      headers: {
        'X-CSRF-TOKEN': csrfToken,  // Include CSRF token in the request headers
      },
      body: formData,
    });

    if (!response.ok) {
      throw new Error('Failed to submit the form');
    }

    const result = await response.json();
    console.log('Form submitted successfully:', result);
    alert('Form submitted successfully')
    closeModal();
    location.reload();
  } catch (error) {
    console.log(error);
    console.error('Error submitting the form:', error);
  }
}
</script>

<template>
  <AuthenticatedLayout>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <div class="main-panels-wrapper">
      <div>
        <!-- Modal -->
        <div class="modal fade" ref="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">New Menu Item</h5>
                <button type="button" class="close" @click="closeModal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body d-flex">
                <div>
                  <div>
                    <label for="title">Title</label>
                    <input type="text" id="title" class="form-control" v-model="title">
                  </div>
                  <div class="mt-3">
                    <label for="description">Description</label>
                    <textarea placeholder="Description..." id="description" class="form-control" v-model="description"></textarea>
                  </div>
                  <div class="mt-3">
                    <label for="category">Category/Type</label>
                    <select id="category" class="form-control" v-model="category">
                      <option value="">Select Type</option>
                      <option value="appetizer">Appetizer</option>
                      <option value="main_course">Main Course</option>
                      <option value="dessert">Dessert</option>
                      <option value="drink">Drink</option>
                    </select>
                  </div>
                </div>
                <div class="image-wrapper ms-4">
                  <input ref="imageInput" type="file" style="display: none;" id="image" @change="handleFileUpload"/>
                  <img @click="triggerFileInput" :src="imagePreview" alt="Upload" class="img-fluid cursor-pointer"/>
                  <div class="mt-3">
                    <label for="price">Price</label>
                    <input type="text" id="price" class="form-control" v-model="price">
                  </div>
                  <div class="mt-3">
                    <label for="calories">Calories</label>
                    <input type="text" id="calories" class="form-control" v-model="calories">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" @click="closeModal">Close</button>
                <button type="button" class="btn btn-success" @click="submitForm">Save</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div>
        ADMIN PANEL
      </div>
      
      <div class="sections">
        <div class="section">
          <div style="display: flex; align-items: center; justify-content: space-between">
            <span>
              <span>MENU</span>
            </span>
            <button class="btn btn-primary" @click="openModal" style="background: teal; padding: 2px 20px; border-radius: 10px; color: aliceblue">
              Add new
            </button>
          </div>
          <div>
            <DataTableComponent />
          </div>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>
</template>

<style>
.main-panels-wrapper {
  padding: 20px;
}

.sections {
  margin-top: 10px;
  padding: 10px;
}

.section {
  padding: 20px;
  background: white;
  border-radius: 6px;
}

.image-wrapper {
  margin: 20px;
}

img.cursor-pointer {
  cursor: pointer;
  max-width: 150px;
  max-height: 150px;
}

.modal-body {
  display: flex;
  justify-content: space-between;
}

.modal-body div {
  flex: 1;
}
</style>
