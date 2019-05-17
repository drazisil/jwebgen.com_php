<template>
  <div>
    <table>
      <tr>
        <td id="tdponyLookupForm">
          <form id="ponyLookupForm">
            <table>
              <tr>
                <td>Please paste the profile or image URL</td>
                <td>
                  <input v-model="ponyurl" type="text" size="20" maxlength="255" id="ponyurl">
                </td>
              </tr>
              <tr>
                <td></td>
                <td>OR</td>
              </tr>
              <tr>
                <td>Please post the Pony ID</td>
                <td>
                  <input
                    v-model="ponyid"
                    type="text"
                    size="20"
                    maxlength="20"
                    id="ponyid"
                    name="ponyid"
                  >
                </td>
              </tr>
              <tr>
                <td>Would you like an adult or baby image?</td>
                <td>
                  <select v-model="idage" id="idage">
                    <option value="Adult">Adult</option>
                    <option value="Baby">Baby</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <input name="nextAction" value="ponyLookup" type="hidden">
                  <input
                    name="DecodeByIDExport"
                    id="DecodeByIDExport"
                    value="Lookup"
                    type="submit"
                    v-on:click.prevent="popup"
                  >
                </td>
              </tr>
            </table>
          </form>
        </td>
        <td>
          <div v-if="pony['Name']">{{ pony }}</div>
        </td>
      </tr>
    </table>
  </div>
</template>

<script>
import ky from "ky";
import TopBar from "../components/TopBar.vue";
import GoogleAd from "../components/GoogleAdd.vue";
import NavMenu from "../components/NavMenu.vue";
import Footer from "../components/Footer.vue";
export default {
  data: function() {
    return {
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
    Footer
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