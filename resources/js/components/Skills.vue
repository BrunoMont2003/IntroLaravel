<template>
  <div class="container">
    <div class="card w-100">
      <div class="card-header">Skills:</div>

      <div class="card-body">
        <div
          v-for="(input, index) in inputs"
          :key="index"
          class="d-flex gap-1 my-3"
        >
          <div class="col-10">
            <input
              type="text"
              placeholder="javascript"
              name="skills[]"
              class="form-control"
              v-model="inputs[index]"
            />
          </div>
          <div class="col-2">
            <button
              type="button"
              class="btn btn-danger"
              v-on:click="remove(index)"
            >
              DELETE
            </button>
          </div>
        </div>
        <button class="btn btn-success text-end" type="button" v-on:click="add">
          ADD
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    skills: {
      type: Array,
      default: () => [],
    },
  },
  mounted() {
    console.log("Component mounted.");
  },
  data() {
    return {
      inputs: this.skills,
    };
  },
  methods: {
    add() {
      this.inputs.push("");
    },
    remove(index) {
      this.inputs.splice(index, 1);
    },
  },
};
</script>
