<template>
  <div>
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
      <table>
        <tr>
          <th>
            Make Your Own Pony
            <a href="http://jwebgen.com/continuousferry.php"></a>
          </th>
          <th></th>
        </tr>
        <tr>
          <td>
            <form name="form1">
              <table>
                <tr>
                  <td>Breed</td>
                  <td>
                    <select v-if="breedList.length > 0" v-model="breed" name="breed">
                      <option
                        v-for="breed in breedList"
                        v-bind:key="breed['id']"
                        v-bind:value="breed['id']"
                      >{{breed['name']}}</option>
                    </select>
                    <select v-else>
                      <option>Loading breeds...</option>
                    </select>
                  </td>
                  <td></td>
                </tr>
                <tr>
                  <td>Gender</td>
                  <td>
                    <select v-model="gender" name="gender">
                      <option value="Male" selected="selected">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </td>
                  <td></td>
                </tr>
                <tr>
                  <td>Age</td>
                  <td>
                    <select v-model="age" name="age">
                      <option value="Baby" selected="selected">Baby</option>
                      <option value="Adult">Adult</option>
                    </select>
                  </td>
                  <td></td>
                </tr>
                <tr>
                  <td>Body</td>
                  <td>
                    <input
                      v-model="bodyColor"
                      type="text"
                      size="10"
                      maxlength="7"
                      id="body"
                      name="body"
                    >
                    <span id="bodyColor" class="colorPicker">&nbsp;</span>
                  </td>
                  <td></td>
                </tr>
                <tr>
                  <td>Hair</td>
                  <td>
                    <input
                      v-model="hairColor"
                      type="text"
                      size="10"
                      maxlength="7"
                      id="hair"
                      name="hair"
                    >
                    <span id="hairColor" class="colorPicker">&nbsp;</span>
                  </td>
                  <td></td>
                </tr>
                <tr>
                  <td>Hair 2</td>
                  <td>
                    <input
                      v-model="hair2Color"
                      type="text"
                      size="10"
                      maxlength="7"
                      id="hair2"
                      name="hair2"
                    >
                    <span id="hair2Color" class="colorPicker">&nbsp;</span>
                  </td>
                  <td></td>
                </tr>
                <tr>
                  <td>Eyes</td>
                  <td>
                    <input
                      v-model="eyesColor"
                      type="text"
                      size="10"
                      maxlength="7"
                      id="eyes"
                      name="eyes"
                    >
                    <span id="eyesColor" class="colorPicker">&nbsp;</span>
                  </td>
                  <td></td>
                </tr>
                <tr>
                  <td>Extra 1</td>
                  <td>
                    <input
                      v-model="extra1Color"
                      type="text"
                      size="10"
                      maxlength="7"
                      id="extra1"
                      name="extra1"
                    >
                    <span id="extra1Color" class="colorPicker">&nbsp;</span>
                  </td>
                  <td></td>
                </tr>
                <tr>
                  <td>Extra 2</td>
                  <td>
                    <input
                      v-model="extra2Color"
                      type="text"
                      size="10"
                      maxlength="7"
                      id="extra2"
                      name="extra2"
                    >
                    <span id="extra2Color" class="colorPicker">&nbsp;</span>
                  </td>
                  <td></td>
                </tr>
                <tr>
                  <td>Breed</td>
                  <td>
                    <select
                      v-if="geneList.length > 0"
                      v-model="genes"
                      name="genes"
                      id="genes"
                      multiple
                    >
                      <option
                        v-for="gene in geneList"
                        v-bind:key="gene['id']"
                        v-bind:value="gene['id']"
                      >{{gene['name']}}</option>
                    </select>
                    <select v-else>
                      <option>Loading genes...</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td>Pattern</td>
                  <td>
                    <select v-model="spattern" name="spattern">
                      <option value>[Pattern]</option>
                      <option value="1">Paint</option>
                      <option value="1|17">Paint Color</option>
                      <option value="2">ZigZag</option>
                      <option value="2|17">ZigZag Color</option>
                      <option value="3">Light Dapple</option>
                      <option value="3|17">Light Dapple Color</option>
                      <option value="4">Heavy Dapple</option>
                      <option value="4|17">Heavy Dapple Color</option>
                      <option value="5">Body Fade</option>
                      <option value="5|17">Body Fade Color</option>
                      <option value="6">Clownfish</option>
                      <option value="6|17">Clownfish Color</option>
                      <option value="7">Zebra</option>
                      <option value="7|17">Zebra Color</option>
                      <option value="8">Tarantula</option>
                      <option value="8|17">Tarantula Color</option>
                      <option value="9">Monarch</option>
                      <option value="9|17">Monarch Color</option>
                      <option value="10">Fawn</option>
                      <option value="10|17">Fawn Color</option>
                      <option value="11">ZebraFinch</option>
                      <option value="11|17">ZebraFinch Color</option>
                      <option value="12">Koi</option>
                      <option value="12|17">Koi Color</option>
                      <option value="13">Appaloosa</option>
                      <option value="13|17">Appaloosa Color</option>
                      <option value="14">Gemsbok</option>
                      <option value="14|17">Gemsbok Color</option>
                      <option value="15">Numbat</option>
                      <option value="15|17">Numbat Color</option>
                      <option value="16">Bioluminescence</option>
                      <option value="16|17">Bioluminescence Color</option>
                    </select>
                  </td>
                  <td></td>
                </tr>
                <tr>
                  <td>Socks</td>
                  <td>
                    <select v-model="ssocks" name="ssocks">
                      <option value>[Socks]</option>
                      <option value="18">Socks</option>
                      <option value="18|22">Color Socks</option>
                      <option value="19">Stockings</option>
                      <option value="19|22">Color Stockings</option>
                      <option value="20">Faded</option>
                      <option value="20|22">Color Fade</option>
                      <option value="21">Okapi</option>
                      <option value="21|22">Color Okapi</option>
                    </select>
                  </td>
                  <td></td>
                </tr>
                <tr>
                  <td>Hair</td>
                  <td>
                    <select v-model="shair" name="shair">
                      <option value>[Hair]</option>
                      <option value="23">Stripe</option>
                      <option value="24">Rainbow</option>
                      <option value="25">Tips</option>
                      <option value="26">MStripes</option>
                      <option value="27">QStripes</option>
                      <option value="28">Faded</option>
                    </select>
                  </td>
                  <td></td>
                </tr>

                <tr>
                  <td>Face</td>
                  <td>
                    <select v-model="sface" name="sface">
                      <option value>[Face]</option>
                      <option value="29">Star</option>
                      <option value="29|34">Star Color</option>
                      <option value="30">Freckles</option>
                      <option value="30|34">Freckles Color</option>
                      <option value="31">Blaze</option>
                      <option value="31|34">Blaze Color</option>
                      <option value="32">Faded</option>
                      <option value="32|34">Faded Color</option>
                      <option value="33">Skull</option>
                      <option value="33|34">Skull Colored</option>
                    </select>
                  </td>
                  <td></td>
                </tr>
                <tr>
                  <td>Surprise Me</td>
                  <td>
                    <input
                      v-model="surpriseme"
                      id="surprise"
                      name="surprise"
                      type="checkbox"
                      value="true"
                    >
                  </td>
                  <td></td>
                </tr>
                <tr>
                  <td></td>
                  <td>
                    <input v-on:click.prevent="genponyjs" value="Generate" type="submit">
                  </td>
                  <td></td>
                </tr>
              </table>
            </form>
          </td>
          <td>
            <div id="genpony"></div>
          </td>
        </tr>
      </table>
    </div>
  </div>
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
      breed: 4,
      gender: "Male",
      age: "Adult",
      bodyColor: "",
      hairColor: "",
      eyesColor: "",
      extra1Color: "",
      extra2Color: "",
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
  display: inline;
}
span.hexColor {
  margin-top: 0px;
  padding: 0em 1em;
}
</style>