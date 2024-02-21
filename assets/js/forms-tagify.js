"use strict";
!function() {
    const base_url = 'http://127.0.0.1/ticket/assets/img/avatars/no-avatar.png';

    // เรียกใช้ fetch API เพื่อดึงข้อมูลจาก API
    fetch('http://127.0.0.1/api/Ticket_control/all_worker')
        .then(response => {
            // ตรวจสอบสถานะของ response
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            // คืนค่าเป็น JSON ของข้อมูล
            return response.json();
        })
        .then(data => {
            // แปลงข้อมูลที่ได้รับเป็นรูปแบบของ whitelist ที่ใช้ใน Tagify
            const whitelist = data.map(worker => {
                return {
                    value: worker.swa_id,
                    name: `${worker.swa_fristname} ${worker.swa_lastname}`,
                    avatar: `http://192.168.161.207/tbkk_shopfloor_sys/asset/img_emp/${worker.swa_emp_code}.jpg`,
                    epmcode: worker.swa_emp_code
                };
                
            });

            // สร้าง Tagify instance ด้วย whitelist ที่ได้จาก API
            let tagifyBasic = new Tagify(document.querySelector("#TagifyBasic"), {
                whitelist: whitelist,
                maxTags: 10,
                dropdown: {
                    maxItems: 20,
                    classname: "tags-inline",
                    enabled: 0,
                    closeOnSelect: !1
                }
            });

            let tagifyUserList = new Tagify(document.querySelector("#TagifyUserList"), {
                whitelist: whitelist,
                enforceWhitelist: true,
                skipInvalid: true,
                maxTags: 10, // กำหนดจำนวนสูงสุดของ Tag ที่สามารถเลือกได้
                dropdown: {
                    closeOnSelect: !1,
                    enabled: 0,
                    classname: "users-list",
                    searchKeys: ["name", "value"]
                },
                templates: {
                    tag: function(a) {
                        return `
                            <tag title="${a.title || a.value}"
                                contenteditable='false'
                                spellcheck='false'
                                tabIndex="-1"
                                class="${this.settings.classNames.tag} ${a.class || ""}"
                                ${this.getAttributes(a)}
                            >
                                <x title='' class='tagify__tag__removeBtn' role='button' aria-label='remove tag'></x>
                                <div>
                                <div class='tagify__tag__avatar-wrap'>
                                <img onerror="this.onerror=null; this.src='http://127.0.0.1/ticket/assets/img/avatars/no-avatar.png'" src="${a.avatar}">
                            </div>
                            
                                    <span class='tagify__tag-text'>${a.name}</span>
                                </div>
                            </tag>
                        `;
                    },
                    dropdownItem: function(a) {
                        return `
                            <div ${this.getAttributes(a)}
                                class='tagify__dropdown__item align-items-center ${a.class || ""}'
                                tabindex="0"
                                role="option"
                            >
                                ${a.avatar ? `<div class='tagify__dropdown__item__avatar-wrap'>
                                    <img onerror="this.onerror=null; this.src='${base_url}'" src="${a.avatar}">
                                </div>` : ""}
                                <div class="fw-medium">${a.name}</div>
                                <span>${a.epmcode}</span> <!-- เปลี่ยนจาก a.value เป็น a.epmcode -->
                            </div>
                        `;
                    },
                    
                    dropdownHeader: function(a) {
                        return `
            <div class="${this.settings.classNames.dropdownItem} ${this.settings.classNames.dropdownItem}__addAll">
                <span>${a.length} members</span>
            </div>
            `
                    }
                }
            });
            
        })
        .catch(error => {
            // แสดงข้อความเมื่อเกิด error ในการเรียก API
            console.error('There was a problem with the fetch operation:', error);
        });
}();
