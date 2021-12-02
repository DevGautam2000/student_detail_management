const $$ = document.querySelector.bind(document);

const sports = $$(".sports");

const persons = [
  {
    name: "Suresh Raina",
    wiki: "https://en.wikipedia.org/wiki/Suresh_Raina",
    src: "https://img1.hscicdn.com/image/upload/f_auto,t_gn_f_345/lsci/db/PICTURES/CMS/316500/316523.png",
  },
  {
    name: "Chris Gayle",
    wiki: "https://en.wikipedia.org/wiki/Chris_Gayle",
    src: "https://www.espncricinfo.com/db/PICTURES/CMS/316400/316494.png",
  },
  {
    name: "MS Dhoni",
    wiki: "https://en.wikipedia.org/wiki/MS_Dhoni",
    src: "https://cdn.britannica.com/25/222725-050-170F622A/Indian-cricketer-Mahendra-Singh-Dhoni-2011.jpg",
  },
  {
    name: "Sachin Tendulkar",
    wiki: "https://en.wikipedia.org/wiki/Sachin_Tendulkar",
    src: "https://upload.wikimedia.org/wikipedia/commons/2/25/Sachin_Tendulkar_at_MRF_Promotion_Event.jpg",
  },
  {
    name: "Virat Kohli",
    wiki: "https://en.wikipedia.org/wiki/Virat_Kohli",
    src: "https://upload.wikimedia.org/wikipedia/commons/thumb/7/7e/Virat_Kohli.jpg/520px-Virat_Kohli.jpg",
  },
];

persons.forEach(({ name, wiki, src }) => {
  var text = document.createElement("span");
  text.append(name);
  text.style.marginBottom = "20px";
  var person = document.createElement("div");
  person.className = "person";
  var img = document.createElement("img");
  img.src = src;
  person.append(text, img);
  person.onclick = function () {
    window.open(wiki);
  };
  sports.append(person);
});

function nav(e) {
  switch (e.innerText) {
    case "Data Entry":
      location.href = "../routes/entries.php";
      break;
    case "Data Retrieval":
      location.href = "../routes/retrieval.php";
      break;

    default:
      break;
  }
}
