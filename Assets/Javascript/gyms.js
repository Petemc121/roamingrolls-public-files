if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
}

var editDes = document.getElementById("editDes");
var desIn = document.getElementById("gymDesIn");
var desOut = document.getElementById("gymDesout");
var desSub = document.getElementById("gymDesSub");
var cancel1 = document.getElementById("cancel1");

editDes.addEventListener("click", function () {
  desIn.style.display = "block";
  desOut.style.display = "none";
  desSub.style.display = "block";
  cancel1.style.display = "block";
});

cancel1.addEventListener("click", function () {
  cancel1.style.display = "none";
  desIn.style.display = "none";
  desSub.style.display = "none";
  desOut.style.display = "block";
  desOut.style.margin = "0 auto";
});
// var yesCheck = document.getElementById("exampleCheck1")
//       var nocheck = document.getElementById("exampleCheck2")
//       var giPrice = document.getElementById("giPrice")
//       var giPriceIn = document.getElementById("giPriceIn")

//       nocheck.addEventListener("change", function() {

//         if (this.checked) {

//         giPrice.style.display = "none";
//         giPriceIn.style.display = "none";
//         yesCheck.checked = false;

//         } else {

//           giPrice.style.display = "block";
//           giPriceIn.style.display = "block";

//         }

//       });

//       yesCheck.addEventListener("change", function() {

//         if (this.checked) {

//       giPrice.style.display = "block";
//       giPriceIn.style.display = "block";
//       nocheck.checked = false;

//         }

//         });

window.onload = function () {
  // $('#_uploadImages').click(function () {
  //     $('#_imagesInput').click();

  //     setTimeout(activeness(), 5000)
  // });
  const imgUp = document.getElementById("uploadImages");
  const imgRules = document.getElementById("imgRules");

  imgUp.addEventListener("mouseover", function () {
    imgRules.style.opacity = "100";
    imgRules.style.zIndex = "0";
  });
  imgUp.addEventListener("mouseout", function () {
    imgRules.style.opacity = "0";
    imgRules.style.zIndex = "-1";
  });

  $("#_imagesInput").on("change", function () {
    var output = document.getElementById("carousel-inner");

    output.innerHTML = "";
    handleFileSelect();
  });
};

let imageArray = [];

function handleFileSelect() {
  //Check File API support
  if (window.File && window.FileList && window.FileReader) {
    var files = event.target.files; //FileList object
    var output = document.getElementById("carousel-inner");
    var arrFilesCount = [];
    var start = $(output).find("li").length;
    var display = document.getElementById("displayImg");
    var end = start + files.length;
    var nonImgCount = 0;

    for (var i = start; i < end; i++) {
      arrFilesCount.push(i); // push to array
    }

    if (start !== 0) {
      $(output)
        .find("li > nav > a.prev")
        .first()
        .attr("href", "#slide-" + (end - 1));
      $(output)
        .find("li > nav > a.next")
        .last()
        .attr("href", "#slide-" + start);
    }

    for (var i = 0; i < files.length; i++) {
      var file = files[i];
      var readFile = URL.createObjectURL(files[i]);

      //Only pics
      if (!file.type.match("image")) {
        nonImgCount++;
        continue;
      }

      var picReader = new FileReader();
      picReader.addEventListener("load", function (event) {
        var picFile = event.target;

        current_i = arrFilesCount.shift();
        if (current_i === 0) {
          prev_i = files.length - 1; //This is for the first element. The previous slide will be the last image. (i=length-1)
        } else {
          prev_i = current_i - 1;
        }
        if (arrFilesCount.length - nonImgCount === 0) {
          next_i = 0;
        } else {
          next_i = current_i + 1; //This is for the last element. The next slide will be the first image (i=0)
        }

        if (current_i == 0) {
          output.innerHTML =
            output.innerHTML +
            '<li id="slide-' +
            current_i +
            '" class="carousel-item active" name = "slide-' +
            current_i +
            '">' +
            "<img class='d-block w-100' src='" +
            picFile.result +
            "'" +
            "title=''/>" +
            "</li>";
        } else {
          output.innerHTML =
            output.innerHTML +
            '<li id="slide-' +
            current_i +
            '" class="carousel-item" name = "slide-' +
            current_i +
            '">' +
            "<img class='d-block w-100' src='" +
            picFile.result +
            "'" +
            "title=''/>" +
            "</li>";
        }

        var save = document.getElementById("savePics");
        var cancel = document.getElementById("cancelPics");
        var upload = document.getElementById("uploadImages");

        save.style.display = "block";
        cancel.style.display = "block";
        upload.style.display = "none";

        cancel.addEventListener("click", function () {
          window.location.reload(true);
        });

        if (current_i == 0) {
          display.src = picFile.result;
        }
      });
      //Read the image
      picReader.readAsDataURL(file);
    }
  } else {
    console.log("Your browser does not support File API");
  }
}

function fasterPreview2(uploader, image, cancelID, saveID, upID) {
  if (uploader.files && uploader.files[0]) {
    $(image).attr("src", window.URL.createObjectURL(uploader.files[0]));
  }

  var save = document.getElementById(saveID);
  var cancel = document.getElementById(cancelID);
  var upload = document.getElementById(upID);

  save.style.display = "block";
  cancel.style.display = "block";
  upload.style.display = "none";

  cancel.addEventListener("click", function () {
    window.location.reload();
  });
}

var slideContain = document.getElementById("slideshow-container");
var displayImg = document.getElementById("displayImg");

var showmap = document.getElementById("embeddedMapContain");
var title = document.getElementById("gymTitle");
var gymDes = document.getElementById("gymDesout");
var editDes = document.getElementById("editDes");
var desTitle = document.getElementById("desTitle");
var more = document.getElementById("more");
var readMore = document.getElementById("readMore");
var readLess = document.getElementById("readLess");
var instructCon = document.getElementById("instructcon");
var prices = document.getElementById("prices");
var fullPrice = document.getElementById("fullPrice");
var pagesecmenu = document.getElementById("pageSecContain");
var pageseclinks = document.getElementsByClassName("pageSecLinks");
var bottomLine = document.getElementsByClassName("bottomLine");
var visitT = document.getElementById("visitt");
var plink = document.getElementById("plink");
var schedulet = document.getElementById("schedulet");
var slink = document.getElementById("slink");
var bigCon = document.getElementById("BigContain");
var scheduleP = document.getElementById("scheduleP");
var checkB = document.getElementById("checkB");
var disappear = document.getElementsByClassName("disappear");

for (let i = 0; i < pageseclinks.length; i++) {
  pageseclinks[i].addEventListener("mouseover", function () {
    bottomLine[i].style.width = "24.9%";
  });
}

for (let i = 0; i < pageseclinks.length; i++) {
  pageseclinks[i].addEventListener("mouseout", function () {
    bottomLine[i].style.width = "0px";
  });
}

function showslide() {
  slideContain.style.display = "block";
  displayImg.style.display = "none";
}

function hideslide() {
  slideContain.style.display = "none";
  displayImg.style.display = "block";
}

function showMap() {
  showmap.style.display = "block";
  displayImg.style.display = "none";
}

function hideMap() {
  showmap.style.display = "none";
  displayImg.style.display = "block";
}

function showMore() {
  readMore.style.display = "none";
  readLess.style.display = "inline-block";
  gymDes.style.maxHeight = "400px";
}

function showLess() {
  readMore.style.display = "inline-block";
  readLess.style.display = "none";
  gymDes.style.maxHeight = "100px";
}

var other = document.getElementById("other");
var otherCheck = document.getElementById("otherCheck");

otherCheck.addEventListener("change", function () {
  if (this.checked) {
    other.style.display = "block";
  } else {
    other.style.display = "none";
  }
});

let beltOut = document.getElementsByClassName("beltLevelOut");
let beltIn = document.getElementsByClassName("beltLevelIn");
let nameOut = document.getElementsByClassName("titOut");
var imgsup = document.getElementsByClassName("inup");
let nameIn = document.getElementsByClassName("titIn");

var plusInstructor = document.getElementById("plusInstructor");

var i = 0;

var plusClicked = 0;

plusInstructor.addEventListener("click", function () {
  plusClicked++;
  let cardLength = document.getElementsByClassName("inAccord").length;

  i = cardLength - 1;

  i++;

  let instructorForm = document.getElementById("instructorForm");

  let appendedCard =
    '<div class="inAccord" id="instructors' +
    i +
    '"><div id = "inCard' +
    i +
    '" = class="inCard"><div class="instruct-card" id="inPic' +
    i +
    '" data-toggle="collapse" data-target="#inCollapse' +
    i +
    '" aria-expanded="true" aria-controls="collapse' +
    i +
    '"><img id = "InImage' +
    i +
    '" class="InImage w-100" src="https://www.roamingrolls.com/wp-content/uploads/2020/11/avatar.gif"><button type= "button" class="inup" id ="inup' +
    i +
    '"><i class="fas fa-file-upload"></i></button><div class="candTContainer"><input name="instructorName' +
    i +
    '" id="instructorNameTemp' +
    i +
    '" class="titIn" placeholder="Name"></input><div style="display:none;" class="titOut"></div><div class=tAndDropCon"><div class="drop"><label class="beltLabel" for="belts">Belt:</label><div class="beltLevelOut" style="display:none;"></div><select  id="beltLevelTemp' +
    i +
    '" class="beltLevelIn" name="belts"><option value="Black">Black</option><option value="Brown">Brown</option><option value="Purple">Purple</option><option value="Blue">Blue</option></select></div></div></div></div><div id="inCollapse' +
    i +
    '" class="collapse hide" aria-labelledby="inPic' +
    i +
    '" data-parent="#inCard' +
    i +
    '"><div class="card-body"><div class="desOut" style="display:none;" id ="instructorDesOut' +
    i +
    '"></div><textarea class="desIn" name="instructorDes' +
    i +
    '" id="instructorDesTemp' +
    i +
    '" placeholder="Describe your instructor here."></textarea></div></div></div></div>';

  appendedHTML = [];

  appendedHTML.push(appendedCard);

  if (cardLength < 5) {
    instructorForm.innerHTML = instructorForm.innerHTML + appendedCard;

    copyVal("#instructorNameTemp0", "#instructorUp0");
    copyVal("#instructorNameTemp1", "#instructorUp1");
    copyVal("#instructorNameTemp2", "#instructorUp2");
    copyVal("#instructorNameTemp3", "#instructorUp3");
    copyVal("#instructorNameTemp4", "#instructorUp4");

    copyVal("#instructorDesTemp0", "#instructorDesUp0");
    copyVal("#instructorDesTemp1", "#instructorDesUp1");
    copyVal("#instructorDesTemp2", "#instructorDesUp2");
    copyVal("#instructorDesTemp3", "#instructorDesUp3");
    copyVal("#instructorDesTemp4", "#instructorDesUp4");

    copySelect("#beltLevelTemp0", "#beltLevelUp0");
    copySelect("#beltLevelTemp1", "#beltLevelUp1");
    copySelect("#beltLevelTemp2", "#beltLevelUp2");
    copySelect("#beltLevelTemp3", "#beltLevelUp3");
    copySelect("#beltLevelTemp4", "#beltLevelUp4");
  } else {
    alert("You've reached your maximum number of instructors!");
    plusClicked--;
  }

  for (i = 0; i < imgsup.length; i++) {
    elementDisBlock(imgsup[i]);
    elementDisBlock(inDesIn[i]);
    elementDisNone(inDesOut[i]);
    elementDisBlock(beltIn[i]);
    elementDisNone(beltOut[i]);
    elementDisBlock(nameIn[i]);
    elementDisNone(nameOut[i]);
  }

  $("#inup0").click(function (e) {
    $("#imageUpload0").click();
  });

  $("#inup1").click(function (e) {
    $("#imageUpload1").click();
  });

  $("#inup2").click(function (e) {
    $("#imageUpload2").click();
  });

  $("#inup3").click(function (e) {
    $("#imageUpload3").click();
  });

  $("#inup4").click(function (e) {
    $("#imageUpload4").click();
  });

  function copyVal(source, output) {
    $(source).on("keyup", function () {
      var val = $(this).val();
      $(output).val(val);
    });
  }

  function copySelect(source, output) {
    $(source).on("change", function () {
      var val = $(this).val();
      $(output).val(val);
    });
  }

  $("#imageUpload0").change(function () {
    fasterPreview(this, "#InImage0");
  });

  $("#imageUpload1").change(function () {
    fasterPreview(this, "#InImage1");
  });

  $("#imageUpload2").change(function () {
    fasterPreview(this, "#InImage2");
  });

  $("#imageUpload3").change(function () {
    fasterPreview(this, "#InImage3");
  });

  $("#imageUpload4").change(function () {
    fasterPreview(this, "#InImage4");
  });
});

function fasterPreview(uploader, image) {
  if (uploader.files && uploader.files[0]) {
    $(image).attr("src", window.URL.createObjectURL(uploader.files[0]));
  }
}

const inMinus = document.getElementById("minusInstructor");
const inPlus2 = document.getElementById("plusInstructor");
let cardArray = document.getElementsByClassName("inAccord");
const instructorRuleMinus = document.getElementById("instructorRuleMinus");
const instructorRulePlus = document.getElementById("instructorRulePlus");

inMinus.addEventListener("click", function () {
  if (
    confirm(
      "Are you sure you want to delete the last instructor in your list? All their information will be permanently deleted"
    )
  ) {
    cardArray[cardArray.length - 1].remove();
    let instructUp = document.getElementById("instructorUp" + cardArray.length);
    console.log(instructUp.id);
    instructUp.value = "deleted";
  }
});

inMinus.addEventListener("mouseover", function () {
  instructorRuleMinus.style.opacity = "100%";
  instructorRuleMinus.style.zIndex = "0";
});

inMinus.addEventListener("mouseout", function () {
  instructorRuleMinus.style.opacity = "0%";
  instructorRuleMinus.style.zIndex = "-1";
});

inPlus2.addEventListener("mouseover", function () {
  instructorRulePlus.style.opacity = "100%";
  instructorRulePlus.style.zIndex = "0";
});

inPlus2.addEventListener("mouseout", function () {
  instructorRulePlus.style.opacity = "0%";
  instructorRulePlus.style.zIndex = "-1";
});

var instructEdit = document.getElementById("editInstruct");
let inCards = document.getElementsByClassName("inCard");
let instructCard = document.getElementsByClassName("instruct-card");
var inPlus = document.getElementById("plusInstructor");
const editPricing = document.getElementById("editPricing");
var InImage = document.getElementsByClassName("InImage");
var collapse = document.getElementsByClassName("collapse");
var inSub = document.getElementById("instructSub");
var inCan = document.getElementById("instructCan");
var classes = document.getElementById("class");
var day = document.getElementById("day");
var week = document.getElementById("week");
let inDesOut = document.getElementsByClassName("desOut");
let inDesIn = document.getElementsByClassName("desIn");
let priceDesIn = document.getElementsByClassName("priceDesIn");
let priceDesOut = document.getElementsByClassName("priceDesOut");
const pricingRules = document.getElementById("priceRules");
const priceSub = document.getElementById("priceSub");
const priceCan = document.getElementById("priceCan");
const priceIn = document.getElementsByClassName("priceIn");
const priceOut = document.getElementsByClassName("priceOut");
const priceLink = document.getElementById("priceLink");
const priceLinkOut = document.getElementById("priceLinkOut");
const priceLinkHint = document.getElementById("fullPrice");
const editSchedule = document.getElementById("editSchedule");
const scheduleIn = document.getElementsByClassName("scheduleIn");
const scheduleOut = document.getElementById("scheduleLinkOut");
const scheduleCan = document.getElementById("scheduleCan");
const editChecks = document.getElementById("editChecks");
const facilityCheck = document.getElementsByClassName("facilityCheck");
const checksIn = document.getElementsByClassName("checksIn");
const checkCan = document.getElementById("checksCan");
const classesCheck = document.getElementsByClassName("classesCheck");
const classTicks = document.getElementsByClassName("fa-check-circle");
const classCrosses = document.getElementsByClassName("fa-times-circle");

function resetIds(idName, className) {
  for (i = 0; i < className.length; i++) {
    className[i].id = idName + i;
  }
}

function resetDataTarget(dataName, className) {
  for (i = 0; i < className.length; i++) {
    className[i].dataset.target = dataName + i;
    className[i].dataset.parent = dataName + i;
  }
}

// function removeCard(eventObj) {
//   var deleteButton = eventObj.target;

//   if (
//     confirm(
//       "Are you sure you want to delete this existing instructor? This action can not be cancelled."
//     )
//   ) {
//     deleteButton.parentNode.parentNode.parentNode.parentNode.removeChild(
//       deleteButton.parentNode.parentNode.parentNode
//     );
//     plusClicked--;
//     resetIds("instructors", cardArray);
//     resetIds("inup", imgup);
//     resetIds("instructorDesTemp", inDesIn);
//     resetIds("instructorDesOut", inDesOut);
//     resetIds("beltLevelTemp", beltIn);
//     resetIds("inCard", inCards);
//     resetIds("inPic", instructCard);
//     resetIds("minusInstructor", deleteButtons);
//     // resetIds("InImage", InImage);
//     resetIds("instructorNameTemp", nameIn);
//     resetIds("inCollapse", collapse);
//     resetDataTarget("#inCard", collapse);

//     // let idNum = this.id.charAt(15)

//     //   $('#instructorUp' + idNum).val('deletedCard');

//     copyVal("#instructorNameTemp0", "#instructorUp0");
//     copyVal("#instructorNameTemp1", "#instructorUp1");
//     copyVal("#instructorNameTemp2", "#instructorUp2");
//     copyVal("#instructorNameTemp3", "#instructorUp3");
//     copyVal("#instructorNameTemp4", "#instructorUp4");

//     copyVal("#instructorDesTemp0", "#instructorDesUp0");
//     copyVal("#instructorDesTemp1", "#instructorDesUp1");
//     copyVal("#instructorDesTemp2", "#instructorDesUp2");
//     copyVal("#instructorDesTemp3", "#instructorDesUp3");
//     copyVal("#instructorDesTemp4", "#instructorDesUp4");

//     copySelect("#beltLevelTemp0", "#beltLevelUp0");
//     copySelect("#beltLevelTemp1", "#beltLevelUp1");
//     copySelect("#beltLevelTemp2", "#beltLevelUp2");
//     copySelect("#beltLevelTemp3", "#beltLevelUp3");
//     copySelect("#beltLevelTemp4", "#beltLevelUp4");
//   }
// }

instructEdit.addEventListener("click", function () {
  copyVal("#instructorNameTemp0", "#instructorUp0");
  copyVal("#instructorNameTemp1", "#instructorUp1");
  copyVal("#instructorNameTemp2", "#instructorUp2");
  copyVal("#instructorNameTemp3", "#instructorUp3");
  copyVal("#instructorNameTemp4", "#instructorUp4");

  copyVal("#instructorDesTemp0", "#instructorDesUp0");
  copyVal("#instructorDesTemp1", "#instructorDesUp1");
  copyVal("#instructorDesTemp2", "#instructorDesUp2");
  copyVal("#instructorDesTemp3", "#instructorDesUp3");
  copyVal("#instructorDesTemp4", "#instructorDesUp4");

  copySelect("#beltLevelTemp0", "#beltLevelUp0");
  copySelect("#beltLevelTemp1", "#beltLevelUp1");
  copySelect("#beltLevelTemp2", "#beltLevelUp2");
  copySelect("#beltLevelTemp3", "#beltLevelUp3");
  copySelect("#beltLevelTemp4", "#beltLevelUp4");

  $("#inup0").click(function (e) {
    $("#imageUpload0").click();
  });

  $("#inup1").click(function (e) {
    $("#imageUpload1").click();
  });

  $("#inup2").click(function (e) {
    $("#imageUpload2").click();
  });

  $("#inup3").click(function (e) {
    $("#imageUpload3").click();
  });

  $("#inup4").click(function (e) {
    $("#imageUpload4").click();
  });

  beltTemp = document.getElementsByClassName("beltLevelUp");

  for (i = 0; i < beltIn.length; i++) {
    if (beltOut[i].innerHTML != "") {
      beltIn[i].value = beltOut[i].innerHTML;
      beltTemp[i].value = beltOut[i].innerHTML;
    }
  }

  plusClicked = 0;
  //  elementDisBlock(inMinus);
  elementDisBlock(inPlus);
  elementDisBlock(inMinus);
  elementDisBlock(inSub);
  elementDisBlock(inCan);

  for (i = 0; i < imgsup.length; i++) {
    elementDisBlock(imgsup[i]);
    elementDisBlock(inDesIn[i]);
    elementDisNone(inDesOut[i]);
    elementDisBlock(beltIn[i]);
    elementDisNone(beltOut[i]);
    elementDisBlock(nameIn[i]);
    elementDisNone(nameOut[i]);
  }
});

// editPricing.addEventListener("click", function () {
//   classes.style.display = "block";
//   day.style.display = "block";
//   week.style.display = "block";
//   priceSub.style.display = "block";
//   priceCan.style.display = "block";
//   priceLink.style.display = "block";
//   priceLinkOut.style.display = "none";
//   priceLinkHint.style.display = "block";

//   for (i = 0; i < priceOut.length; i++) {
//     priceOut[i].style.display = "none";
//     priceIn[i].style.display = "block";
//     priceDesOut[i].style.display = "none";
//     priceDesIn[i].style.display = "block";
//   }
// });

// editPricing.addEventListener("mouseover", function () {
//   pricingRules.style.opacity = "100";
// });
// editPricing.addEventListener("mouseout", function () {
//   pricingRules.style.opacity = "0";
// });

editSchedule.addEventListener("click", function () {
  for (i = 0; i < scheduleIn.length; i++) {
    scheduleIn[i].style.display = "block";
  }

  scheduleOut.style.display = "none";

  for (i = 0; i < classesCheck.length; i++) {
    classesCheck[i].style.display = "block";
  }

  for (i = 0; i < classTicks.length; i++) {
    classTicks[i].style.display = "none";
  }

  for (i = 0; i < classCrosses.length; i++) {
    classCrosses[i].style.display = "none";
  }

  for (i = 0; i < priceOut.length; i++) {
    priceOut[i].style.display = "none";
    priceIn[i].style.display = "block";
    priceDesOut[i].style.display = "none";
    priceDesIn[i].style.display = "block";
  }

  priceLink.style.display = "block";
  priceLinkOut.style.display = "none";
  priceLinkHint.style.display = "block";
});

editChecks.addEventListener("click", function () {
  for (let i = 0; i < facilityCheck.length; i++) {
    facilityCheck[i].style.display = "block";
  }

  for (let i = 0; i < checksIn.length; i++) {
    checksIn[i].style.display = "block";
  }
});

scheduleCan.addEventListener("click", function () {
  for (i = 0; i < scheduleIn.length; i++) {
    scheduleIn[i].style.display = "none";
  }

  scheduleOut.style.display = "block";
  priceLinkOut.style.display = "block";
  priceLink.style.display = "none";
  priceLinkHint.style.display = "none";

  for (i = 0; i < classTicks.length; i++) {
    classTicks[i].style.display = "block";
  }

  for (i = 0; i < classCrosses.length; i++) {
    classCrosses[i].style.display = "block";
  }
  for (i = 0; i < classesCheck.length; i++) {
    classesCheck[i].style.display = "none";
  }
});

inCan.addEventListener("click", function () {
  window.location.reload();
});

checkCan.addEventListener("click", function () {
  window.location.reload();
});

// priceCan.addEventListener("click", function () {
//   classes.style.display = "none";
//   day.style.display = "none";
//   week.style.display = "none";
//   priceSub.style.display = "none";
//   priceCan.style.display = "none";
//   priceLink.style.display = "none";
//   priceLinkOut.style.display = "block";
//   priceLinkHint.style.display = "none";

//   for (i = 0; i < priceOut.length; i++) {
//     priceOut[i].style.display = "block";
//     priceIn[i].style.display = "none";
//     priceDesOut[i].style.display = "block";
//     priceDesIn[i].style.display = "none";
//   }
// });

function elementDisNone(element) {
  element.style.display = "none";
}

function elementDisBlock(element) {
  element.style.display = "block";
}

var expanded = false;

function showCheckboxes() {
  var checkboxes = document.getElementById("checkboxes1");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}

function showCheckboxes2() {
  var checkboxes = document.getElementById("checkboxes2");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}

function showCheckboxes3() {
  var checkboxes = document.getElementById("checkboxes3");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}
function showCheckboxes4() {
  var checkboxes = document.getElementById("checkboxes4");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}
function showCheckboxes5() {
  var checkboxes = document.getElementById("checkboxes5");
  if (!expanded) {
    checkboxes.style.display = "block";
    expanded = true;
  } else {
    checkboxes.style.display = "none";
    expanded = false;
  }
}

function copyVal(source, output) {
  $(source).on("keyup", function () {
    var val = $(this).val();
    $(output).val(val);
  });
}

function copySelect(source, output) {
  $(source).on("change", function () {
    var val = $(this).val();
    $(output).val(val);
  });
}

var phonetip = document.getElementById("phoneTip");
var phoneIcon = document.getElementById("phoneIcon");
var phoneInput = document.getElementById("phoneInput");

var emailtip = document.getElementById("emailTip");
var emailIcon = document.getElementById("emailIcon");
var emailInput = document.getElementById("emailInput");

phoneIcon.addEventListener("click", function () {
  myFunction(phoneInput, phonetip);
});

phoneIcon.addEventListener("mouseover", function () {
  phonetip.style.zIndex = "0";
  phonetip.style.opacity = "100%";
});
phoneIcon.addEventListener("mouseout", function () {
  phonetip.style.opacity = "0%";
  setTimeout(function () {
    outFunc(phonetip, phoneInput);
  }, 1000);
});

emailIcon.addEventListener("click", function () {
  myFunction(emailInput, emailtip);
});

emailIcon.addEventListener("mouseover", function () {
  phonetip.style.zIndex = "0";
  emailtip.style.opacity = "100%";
});
emailIcon.addEventListener("mouseout", function () {
  emailtip.style.opacity = "0%";
  setTimeout(function () {
    phonetip.style.zIndex = "-1";
    outFunc(emailtip, emailInput);
  }, 1000);
});

function myFunction(element, tip) {
  var tempItem = document.createElement("input");
  tempItem.setAttribute("type", "text");
  content = element.value;
  tempItem.setAttribute("value", content);
  document.body.appendChild(tempItem);
  tempItem.select();
  tempItem.setSelectionRange(0, 9999999);
  document.execCommand("copy");
  tempItem.setAttribute("style", "display:none");

  tip.innerHTML = "Copied: " + content;
}

function outFunc(element, input) {
  element.innerHTML = "Copy " + input.value + " to clipboard";
}

gymDelete = document.getElementById("gymDelete");
hiddenDeleteButton2 = document.getElementById("hiddenDeleteButton2");

gymDelete.addEventListener("click", function () {
  if (
    confirm(
      "Are you sure you want to delete this gym? This process is irreversible."
    )
  ) {
    hiddenDeleteButton2.click();
    console.log("This gym has been deleted");
  }
});
