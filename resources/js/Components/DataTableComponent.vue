<template>
  <div>
    <div>
      <span>Filter: </span>
      <span>
        <select id="type" class="form-control" style="width: 200px;">
          <option value="all">All</option>
          <option value="regumes">Regumes</option>
        </select>
      </span>
    </div>
    <table border="1" cellpadding="5" cellspacing="0" class="table">
      <thead>
        <tr>
          <th v-for="header in headers" :key="header.value">{{ header.text }}</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="item in menuItems" :key="item.id">
          <td>{{ item.name }}</td>
          <td>{{ item.description }}</td>
          <td>{{ item.type }}</td>
          <td>{{ item.price }}</td>
          <td>
            <img :src="item.image" alt="Menu Item" width="40" />
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      headers: [
        { text: 'Name', value: 'name' },
        { text: 'Description', value: 'description' },
        { text: 'Category', value: 'category' },
        { text: 'Price', value: 'price' },
        { text: 'Image', value: 'image' },
      ],
      menuItems: [],
    };
  },
  methods: {
    async fetchMenuItems(typeFilter='regumes') {
      try {
        const payload = { type: typeFilter }; // Example key-value pair with 'type' as key
        const response = await axios.post('/fetchmeals', payload); // Send the payload in the POST request
        this.menuItems = response.data;
        console.log(this.menuItems); // Ensure the data is being loaded correctly
      } catch (error) {
        console.error('Failed to fetch menu items:', error);
      }
    },
  },
  mounted() {
    this.fetchMenuItems();
  },
};
</script>
