(self.webpackChunk=self.webpackChunk||[]).push([[5859],{838205:(t,e,r)=>{"use strict";r.d(e,{Z:()=>o});const o={"symfony--ux-turbo--turbo-core":r(232466).Z}},360088:(t,e,r)=>{"use strict";r.d(e,{Z:()=>s});var o=r(406599);class s extends o.Controller{constructor(){super(...arguments),this.jobSectorValueAttrName="data-job-sector-force-value"}connect(){this.updateJobSector(),this.occupationTarget.addEventListener("change",(()=>{this.updateJobSector()}))}updateJobSector(){const t=this.occupationTarget.options[this.occupationTarget.selectedIndex],e=t.hasAttribute(this.jobSectorValueAttrName)?t.getAttribute(this.jobSectorValueAttrName):"";""!==e?(this.jobSectorTarget.value=e,this.jobSectorTarget.dispatchEvent(new Event("change",{bubbles:!0})),Array.from(this.jobSectorTarget.options).forEach((t=>t.disabled=!t.selected))):Array.from(this.jobSectorTarget.options).forEach((t=>t.disabled=!1))}}s.targets=["occupation","jobSector"]},173443:(t,e,r)=>{r(796386),r(831602)},831602:(t,e,r)=>{"use strict";r.r(e),r.d(e,{app:()=>c});var o=r(142192),s=r(360088),c=(0,o.x)();c.register("job-sector-force",s.Z)},796386:(t,e,r)=>{"use strict";r.r(e)}},t=>{t.O(0,[5495],(()=>{return e=173443,t(t.s=e);var e}));t.O()}]);