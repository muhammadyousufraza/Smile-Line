"use strict";(globalThis.webpackChunkcomplianz_gdpr=globalThis.webpackChunkcomplianz_gdpr||[]).push([[3430,880],{20880:(e,t,a)=>{a.r(t),a.d(t,{default:()=>s});var n=a(86087),c=a(96979),l=a(45111),o=a(4219),d=a(27723);const s=e=>{const{saving:t,updateDocument:a}=(0,c.UseDocumentsData)(),{showSavedSettingsNotice:s}=(0,o.default)();let r=!!e.page.page_id;return(0,n.createElement)("div",{className:"cmplz-create-document"},r&&(0,n.createElement)(l.default,{name:"success",color:"green"}),!r&&(0,n.createElement)(l.default,{name:"times"}),(0,n.createElement)("input",{disabled:t,onChange:t=>((e,t)=>{a(t,e.target.value)})(t,e.page.page_id),type:"text",value:e.page.title}),(0,n.createElement)("div",{className:"cmplz-shortcode-container",onClick:t=>((e,t)=>{let a;e.target.classList.add("cmplz-click-animation");let n=document.createElement("input");document.getElementsByTagName("body")[0].appendChild(n),n.value=t,n.select();try{a=document.execCommand("copy")}catch(e){a=!1}n.parentElement.removeChild(n),a&&s((0,d.__)("Copied shortcode","complianz-gdpr"))})(t,e.page.shortcode)},(0,n.createElement)(l.default,{name:"shortcode"})))}},83430:(e,t,a)=>{a.r(t),a.d(t,{default:()=>i});var n=a(86087),c=a(27723),l=a(96979),o=a(20880),d=a(4219),s=a(99695),r=a(45111);const i=(0,n.memo)((()=>{const{saveDocuments:e,saving:t,documentsChanged:a,documentsDataLoaded:i,hasMissingPages:m,fetchDocumentsData:u,requiredPages:p}=(0,l.UseDocumentsData)(),{fields:g,fieldsLoaded:h,changedFields:f,addHelpNotice:_,removeHelpNotice:b,showSavedSettingsNotice:v,setDocumentSettingsChanged:E}=(0,d.default)(),[z,y]=(0,n.useState)(!1);let C;if((0,n.useEffect)((()=>{h&&(f.length>0||u())}),[g,f]),(0,n.useEffect)((()=>{if(i)if(0===p.length){let e=(0,c.__)("You haven't selected any legal documents to create.","complianz-gdpr")+" "+(0,c.__)("You can continue to the next step.","complianz-gdpr");_("create-documents","warning",e,(0,c.__)("No required documents","complianz-gdpr")),y(!0)}else z&&b("create-documents")}),[p,i]),C=m?(0,c.__)('The pages marked with X should be added to your website. You can create these pages with a shortcode, a Gutenberg block or use the below "Create missing pages" button.',"complianz-gdpr"):(0,c.__)('All necessary pages have been created already. You can update the page titles here if you want, then click the "Update pages" button.',"complianz-gdpr"),!i)return(0,n.createElement)(s.default,{lines:"3"});let k=!m&&!a;return(0,n.createElement)(n.Fragment,null,i&&C,i&&p.map(((e,t)=>(0,n.createElement)(o.default,{page:e,key:t}))),p.length>0&&(0,n.createElement)("div",null,(0,n.createElement)("button",{disabled:k,onClick:()=>(async()=>{e().then((()=>{E(!0),v((0,c.__)("Documents updated!","complianz-gdpr"))}))})(),className:"button button-default"},m?(0,c.__)("Create missing pages","complianz-gdpr"):(0,c.__)("Update","complianz-gdpr"),t&&(0,n.createElement)(r.default,{name:"loading",color:"grey"}))))}))}}]);