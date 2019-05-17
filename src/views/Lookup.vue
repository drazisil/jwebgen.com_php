<template>
  <div>
    <script2 type="text/javascript" src="/assets/js_ajax.js"></script2>
    <script2 type="text/javascript" src="/assets/js_lookup.js"></script2>
    <table>
      <tr>
        <td id="tdponyLookupForm">
          <form
            name="ponyLookupForm"
            id="ponyLookupForm"
            method="get"
            action="controller.php"
            onsubmit="return ajaxQuery('GET', generateLookupURL(), 'ponyLookupZone');
                                    return false;"
          >
            <table>
              <tr>
                <td>Please paste the profile or image URL</td>
                <td>
                  <input type="text" size="20" maxlength="255" name="ponyurl" id="ponyurl">
                </td>
              </tr>
              <tr>
                <td></td>
                <td>OR</td>
              </tr>
              <tr>
                <td>Please post the Pony ID</td>
                <td>
                  <input type="text" size="20" maxlength="20" id="ponyid" name="ponyid">
                </td>
              </tr>
              <tr>
                <td>Would you like an adult or baby image?</td>
                <td>
                  <select id="idage" name="idage">
                    <option value="Adult" selected="selected">Adult</option>
                    <option value="Baby">Baby</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td></td>
                <td>
                  <input name="nextAction" value="ponyLookup" type="hidden">
                  <input name="DecodeByIDExport" id="DecodeByIDExport" value="Lookup" type="submit">
                </td>
              </tr>
            </table>
          </form>
        </td>
        <td>
          <div id="ponyLookupZone"></div>
        </td>
      </tr>
    </table>
  </div>
</template>

<script>
import TopBar from "../components/TopBar.vue";
import GoogleAd from "../components/GoogleAdd.vue";
import NavMenu from "../components/NavMenu.vue";
import Footer from "../components/Footer.vue";
export default {
  data: function() {
    return {
      greeting: "Hello"
    };
  },
  components: {
    TopBar,
    GoogleAd,
    NavMenu,
    Footer
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