<template>
  <v-container>
    Generate your own dream pony. Mix and match the colors and S-Genes
    together, or check Surprise me for, well, a surprise.
    <span
      style="color: #ff0000;"
    >
      The images used on this site are owned and copyrighted by
      <a
        href="http://ponyisland.net"
      >ponyisland.net</a> and are used with
      permission.
      <br>Any use of these images outside of this site requires permission from
      ponyisland.net.
    </span>
    <div>
      Make Your Own Pony
      <a href="http://jwebgen.com/continuousferry.php"></a>
      <v-form name="form1">
        <v-select v-model="breed" name="breed" :items="breedList" item-text="name" item-value="id"></v-select>
        <v-select v-model="gender" name="gender" :items="genderList" label="Gender"></v-select>
        <v-select label="Age" v-model="age" name="age" :items="ageList"></v-select>
        <v-text-field
          label="Body Color"
          v-model="bodyColor"
          type="text"
          size="10"
          maxlength="7"
          id="body"
          name="body"
        ></v-text-field>
        <span id="bodyColor" class="colorPicker">&nbsp;</span>
        <v-text-field
          label="Hair color 1"
          v-model="hairColor"
          type="text"
          size="10"
          maxlength="7"
          id="hair"
          name="hair"
        ></v-text-field>
        <span id="hairColor" class="colorPicker">&nbsp;</span>
        <v-text-field
          label="Hair color 2"
          v-model="hair2Color"
          type="text"
          size="10"
          maxlength="7"
          id="hair2"
          name="hair2"
        ></v-text-field>
        <span id="hair2Color" class="colorPicker">&nbsp;</span>
        <v-text-field
          label="Eye color"
          v-model="eyesColor"
          type="text"
          size="10"
          maxlength="7"
          id="eyes"
          name="eyes"
        ></v-text-field>
      </v-form>
      <span id="eyesColor" class="colorPicker">&nbsp;</span>
      <v-text-field
        label="Extra color 1"
        v-model="extra1Color"
        type="text"
        size="10"
        maxlength="7"
        id="extra1"
        name="extra1"
      ></v-text-field>
      <span id="extra1Color" class="colorPicker">&nbsp;</span>
      <v-text-field
        label="Extra color 2"
        v-model="extra2Color"
        type="text"
        size="10"
        maxlength="7"
        id="extra2"
        name="extra2"
      ></v-text-field>
      <span id="extra2Color" class="colorPicker">&nbsp;</span>
      <v-select
        v-if="geneList.length > 0"
        label="Genes"
        v-model="genes"
        name="genes"
        id="genes"
        :items="geneList"
        item-text="name"
        item-value="id"
      ></v-select>
      <select v-else>
        <option>Loading genes...</option>
      </select>
      <v-checkbox
        label="Surprise me"
        v-model="surpriseme"
        id="surprise"
        name="surprise"
        type="checkbox"
        value="true"
      ></v-checkbox>
      <v-btn v-on:click.prevent="genponyjs" value="Generate" type="submit">Generate</v-btn>
      <!-- </v-form> -->
      <div id="genpony"></div>
    </div>
  </v-container>
</template>

<script>
import ky from "ky";
import TopBar from "../components/TopBar.vue";
import GoogleAd from "../components/GoogleAdd.vue";
import NavMenu from "../components/NavMenu.vue";
import Footer from "../components/Footer.vue";
import NamedPony from "../components/NamedPony.vue";
export default {
  data: function() {
    return {
      breedList: [],
      geneList: [],
      genderList: ["Male", "Female"],
      ageList: ["Baby", "Adult"],
      breed: 4,
      gender: "Male",
      age: "Adult",
      bodyColor: "",
      hairColor: "",
      hair2Color: "",
      eyesColor: "",
      extra1Color: "",
      extra2Color: "",
      genes: [],
      spattern: "",
      ssocks: "",
      shair: "",
      sface: "",
      surpriseme: false,
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
    };
  },
  components: {
    TopBar,
    GoogleAd,
    NavMenu,
    Footer,
    NamedPony
  },
  mounted: async function() {
    await this.fetchBreedList();
    await this.fetchGeneList();
  },
  methods: {
    fetchBreedList: async function() {
      const breedList = await ky.get(`/api/breedlist`).json();
      this.breedList = breedList;
    },
    fetchGeneList: async function() {
      const geneList = await ky.get(`/api/genelist`).json();
      this.geneList = geneList;
    },
    genponyjs: async function() {
      //   const parsed = await ky
      //     .get(`/api/pony?nextAction=ponyGenerate&ponyid=${this.ponyid}`)
      //     .json();
      //   this.pony = parsed;
    }
  }
};
</script>

<style scoped>
/* body {
  margin: 0px;
  padding: 0px;
  font-family: Verdana, Arial, Helvetica, sans-serif;
  font-size: small;
  background-color: #fff;
}

img {
  border: none;
}

div#content,
div#footer,
#navMenu {
  width: 800px;
  margin: 0px auto;
}
span.formLabel {
  display: inline;
}
span.hexColor {
  margin-top: 0px;
  padding: 0em 1em;
} */
</style>