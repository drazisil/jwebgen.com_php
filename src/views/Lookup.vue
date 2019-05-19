<template>
  <v-container>
    <v-layout row wrap>
    <v-flex xs6>
          <v-form>
                  <v-text-field label="Pony URL" placeholder="Please paste the profile or image URL" v-model="ponyurl" type="text" size="20" maxlength="255" id="ponyurl"></v-text-field>
                OR
                  <v-text-field
                  label="Pony ID"
                  placeholder="Please post the Pony ID"
                    v-model="ponyid"
                    type="text"
                    size="20"
                    maxlength="20"
                    id="ponyid"
                    name="ponyid"
                  ></v-text-field
                  <v-select label="
                  Would you like an adult or baby image?" v-model="idage" id="idage" :items="ageList"></v-select>
                  <v-btn
                    name="DecodeByIDExport"
                    id="DecodeByIDExport"
                    value="Lookup"
                    type="submit"
                    v-on:click.prevent="popup"
                  >Lookup</v-btn>
          </v-form>
          </v-flex>
          <v-flex xs6>
          <div v-if="pony['Name']">
            <NamedPony v-bind:pony="pony"/>
          </div>
          </v-flex>
          </v-layout>
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
      ageList: ['Baby', 'Adult'],
      ponyurl: "",
      ponyid: "",
      idage: "Adult",
      greeting: "Hello",
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
  methods: {
    popup: async function() {
      const parsed = await ky
        .get(`/api/pony?nextAction=ponyLookup&ponyid=${this.ponyid}`)
        .json();
      this.pony = parsed;
    }
  }
};
</script>

<style scoped>
body {
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
  float: left;
  width: 6em;
  display: inline;
}
span.hexColor {
  margin-top: 0px;
  padding: 0em 1em;
}
</style>