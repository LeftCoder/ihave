<script lang="ts" setup>
import { computed } from '@vue/reactivity'
import { ref } from 'vue'
const data = (await import('~/cennik.json')).default

const tableData = ref(data)
const search = ref('')
const filteredData = computed(() => {
  return tableData.value.filter((position) => {
    return position.model.toLowerCase().includes(search.value.toLowerCase())
  })
})
</script>

<template>
  <Suspense>
    <template #default>
      <form class="mb-12">
        <label
          for="default-search"
          class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"
          >Pole wyszykiwania</label
        >
        <div class="relative">
          <div
            class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none"
          >
            <svg
              aria-hidden="true"
              class="w-5 h-5 text-gray-500 dark:text-gray-400"
              fill="none"
              stroke="currentColor"
              viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                stroke-width="2"
                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
              ></path>
            </svg>
          </div>
          <input
            v-model="search"
            type="search"
            name="search"
            id="default-search"
            class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            placeholder="Wpisz model telefonu..."
            required
          />
          <button
            type="submit"
            class="text-white absolute right-2.5 bottom-2.5 focus:ring-4 focus:outline-none font-medium rounded-lg text-sm px-4 py-2 btn bg-gray-900 hover:bg-gray-800 dark:bg-gray-700 dark:hover:bg-gray-800"
          >
            Search
          </button>
        </div>
      </form>
      <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
        <table
          class="w-full text-sm text-left text-gray-500 dark:text-gray-400"
        >
          <thead
            class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400"
          >
            <tr>
              <th scope="col" class="py-3 px-6">Model telefonu</th>
              <th scope="col" class="py-3 px-6">Opis usługi</th>
              <th scope="col" class="py-3 px-6">Cena</th>
            </tr>
          </thead>
          <tbody>
            <tr
              v-for="(position, index) in filteredData"
              :key="index"
              class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600"
            >
              <th
                scope="row"
                class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white"
              >
                {{ position.model }}
              </th>
              <td class="py-4 px-6">{{ position.desc }}</td>
              <td class="py-4 px-6">{{ position.price }} zł</td>
            </tr>
          </tbody>
        </table>
      </div>
    </template>
    <template #fallback> Loading... </template>
  </Suspense>
</template>
