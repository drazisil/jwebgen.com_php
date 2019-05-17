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
#top_bar {
  position: absolute;
  top: 0px;
  left: 0px;
  width: 100%;
  height: 40px;
  background: #ffffe1;
  border-bottom: 1px solid black;
  float: left;
  z-index: 2;
  font-size: 1em;
  font-weight: normal;
  display: inline;
  font-family: Arial, Verdana, sans-serif;
  text-align: left;
  color: black;
}
#top_bar:hover {
  background: #004ba8;
  color: white;
}
#top_bar p.infotext {
  float: left;
  padding-left: 20px;
  padding-right: 20px;
  margin-left: 15px;
  margin-top: 7px;
}
#top_bar a.close {
  font-size: 14px;
  font-weight: bold;
  text-align: right;
  margin-top: 7px;
  margin-right: 15px;
  float: right;
  color: silver;
  text-decoration: none;
}
#top_bar a.close:hover {
  margin-top: 8px;
  color: white;
}
</style>