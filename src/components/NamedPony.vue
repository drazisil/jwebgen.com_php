<template>
  <div class="pony">
    <img :src="ponyImageUrl">
    <br>

    <span class="formLabel">* Name:</span>
    {{ pony.Name }}
    <br>

    <span v-if="pony.ID">
      <span class="formLabel">* URL:</span>
      <input type="text" size="40" :value="imgWithURL">
      <br>
    </span>
    <span v-else>
      <span class="formLabel">* URL:</span>
      <br>
    </span>
    <input type="text" size="40" :value="imgWithoutURL">
    <br>
    <span class="formLabel">* Breed:</span>
    {{pony['Breed']}}
    <br>
    <span class="formLabel">* Gender:</span>
    {{pony['Gender']}}
    <br>
    <span class="formLabel">* Eyes:</span>
    <span
      class="hexColor"
      :title="pony['Colors']['Eyes']"
      v-bind:style="styleObject"
    >{{pony['Colors']['Eyes']}}</span>
    <br>
    <span class="formLabel">* Hair:</span>
    <span
      class="hexColor"
      :title="pony['Colors']['Hair']"
      v-bind:style="styleObject"
    >{{pony['Colors']['Hair']}}</span>
    <br>
    <span class="formLabel">* Hair2:</span>
    <span
      class="hexColor"
      :title="pony['Colors']['Hair2']"
      v-bind:style="styleObject"
    >{{pony['Colors']['Hair2']}}</span>
    <br>
    <span class="formLabel">* Body:</span>
    <span
      class="hexColor"
      :title="pony['Colors']['Body']"
      v-bind:style="styleObject"
    >{{pony['Colors']['Body']}}</span>
    <br>
    <span class="formLabel">* Extra1:</span>
    <span
      class="hexColor"
      :title="pony['Colors']['Extra1']"
      :style="styleObject"
    >{{pony['Colors']['Extra2']}}</span>
    <br>
    <span class="formLabel">* Extra2:</span>
    <span
      class="hexColor"
      :title="pony['Colors']['Extra2']"
      :style="styleObject"
    >{{pony['Colors']['Extra2']}}</span>
    <br>
    <span class="formLabel">* S-Genes:</span>
    {{pony.sgenePattern}}|{{pony.sgeneSocks}}|{{pony.sgeneHair}}|{{pony.sgeneFace}}
    <br>
  </div>
</template>

<script>
export default {
  props: {
    pony: {
      ID: 0,
      Name: "",
      BreedID: "",
      Gender: "",
      Colors: {
        Eyes: "",
        Hair: "",
        Hair2: "",
        Body: "",
        Extra1: "",
        Extra2: ""
      },
      Genes: []
    }
  },
  data: function() {
    return {
      styleObject: {
        color: this.pony["Colors"]["Eyes"],
        backgroundColor: this.fontColorContrast(this.pony["Colors"]["Eyes"])
      }
    };
  },
  computed: {
    ponyImageUrl: function() {
      return `${this.ponyUrl}&size=200&modified`;
    },
    ponyUrl: function() {
      return `http://im3.ponyisland.net/?img=pony&pny=${this.pony["ID"]}`;
    },
    imgWithURL: function() {
      return `[URL http://im3.ponyisland.net/?img=pony&pny=${
        this.pony["ID"]
      }][IMG]${this.ponyUrl}[/IMG][/URL]`;
    },
    imgWithoutURL: function() {
      return `[IMG]${this.ponyUrl}[/IMG]`;
    }
  },
  methods: {
    fontColorContrast: function() {
      return this.pony["Colors"]["Eyes"];
    }
  }
};
</script>

<style scoped>
</style>