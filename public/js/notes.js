document.addEventListener('DOMContentLoaded', function () {
    const jobTableBody = document.getElementById('job-table-body');
    const addRowButton = document.getElementById('add-row-button');
    let jobId = 1;

    // Example data
    const jobs = [
        {
            id: jobId++,
            company: '京东',
            priority: 'B', // Example priority
            industry: '互联网',
            base: '北京',
            position: 'TET综合管培生',
            progress: ['已投递', '已测评'],
            detail: '',
            applicationDate: '2023-08-08',
            testDate: '2023-08-12',
            interviewDate: '2023-08-25',
            link: 'https://campus.jd.com'
        },
        {
            id: jobId++,
            company: '百度',
            priority: 'A',
            industry: '互联网',
            base: '北京',
            position: '资管管培岗',
            progress: ['已投递', '已测评', '已一面'],
            detail: '',
            applicationDate: '2023-08-08',
            testDate: '2023-08-09',
            interviewDate: '2023-08-12',
            link: 'https://career.baidu.com'
        },
        {
            id: jobId++,
            company: '新浪',
            priority: 'B',
            industry: '互联网',
            base: '北京',
            position: '综合管培生',
            progress: '已投递',
            detail: '',
            applicationDate: '2023-08-08',
            testDate: '2023-08-09',
            interviewDate: '2023-08-12',
            link: 'https://career.sina.com.cn'
        },
        {
            id: jobId++,
            company: '快手',
            priority: 'B',
            industry: '互联网',
            base: '北京',
            position: '商业管培生',
            progress: ['已投递', '已测评', '终止'],
            detail: '挂简历',
            applicationDate: '2023-08-08',
            testDate: '2023-08-09',
            interviewDate: '2023-08-12',
            link: 'https://zhaopin.kuaishou.cn'
        },
        {
            id: jobId++,
            company: '拼多多',
            priority: 'C',
            industry: '互联网',
            base: '上海',
            position: '投资分析师',
            progress: ['已投递', '已测评'],
            detail: '',
            applicationDate: '2023-08-08',
            testDate: '2023-08-13',
            interviewDate: '2023-08-25',
            link: 'https://career.pinduoduo.com'
        },
        {
            id: jobId++,
            company: '美团',
            priority: 'C',
            industry: '互联网',
            base: '北京',
            position: '业务管培生',
            progress: '已投递',
            detail: '',
            applicationDate: '2023-08-08',
            testDate: '2023-08-13',
            interviewDate: '2023-08-28',
            link: 'https://zhaopin.meituan.com'
        },
        {
            id: jobId++,
            company: '联想',
            priority: 'B',
            industry: '互联网',
            base: '北京',
            position: '风控管培生',
            progress: ['已投递', '已测评', '已一面'],
            detail: '',
            applicationDate: '2023-08-09',
            testDate: '2023-08-10',
            interviewDate: '2023-08-28',
            link: 'https://talent.lenovo.com.cn'
        },
        {
            id: jobId++,
            company: '小红书',
            priority: 'B',
            industry: '互联网',
            base: '上海',
            position: '商务管培生',
            progress: ['已投递', '已测评', '终止'],
            detail: '',
            applicationDate: '2023-08-09',
            testDate: '2023-08-10',
            interviewDate: '2023-08-28',
            link: 'https://job.xiaohongshu.com'
        },
        {
            id: jobId++,
            company: '米哈游',
            priority: 'C',
            industry: '互联网',
            base: '上海',
            position: '国际管培生',
            progress: '已投递',
            detail: '放弃笔试',
            applicationDate: '2023-08-10',
            testDate: '2023-08-11',
            interviewDate: '',
            link: 'https://job.mihoyo.com'
        },
        {
            id: jobId++,
            company: '字节',
            priority: 'C',
            industry: '互联网',
            base: '北京',
            position: '调研 飞书产品',
            progress: ['已投递', '已测评'],
            detail: '',
            applicationDate: '2023-08-10',
            testDate: '2023-08-11',
            interviewDate: '2023-08-27',
            link: 'https://jobs.bytedance.com'
        },
        {
            id: jobId++,
            company: '蔚来',
            priority: 'B',
            industry: '企业',
            base: '上海',
            position: '金融管培培训生',
            progress: ['已投递', '已测评'],
            detail: '',
            applicationDate: '2023-08-11',
            testDate: '2023-08-13',
            interviewDate: '',
            link: 'https://nio.jobs.com'
        },
        {
            id: jobId++,
            company: '度小满',
            priority: 'B',
            industry: '互联网金融',
            base: '北京',
            position: '业务分析师',
            progress: '已投递',
            detail: '',
            applicationDate: '2023-08-11',
            testDate: '2023-08-13',
            interviewDate: '',
            link: 'https://jobs.douxiama.com'
        },
        {
            id: jobId++,
            company: '腾讯',
            priority: 'A',
            industry: '互联网',
            base: '深圳',
            position: '金融科技研究',
            progress: ['已投递', '已测评'],
            detail: '',
            applicationDate: '2023-08-12',
            testDate: '2023-08-14',
            interviewDate: '2023-08-29',
            link: 'https://join.qq.com'
        },
        {
            id: jobId++,
            company: '中国银河证券',
            priority: 'B',
            industry: '国企',
            base: '北京',
            position: '资产管理 中后台',
            progress: '已投递',
            detail: '',
            applicationDate: '2023-08-12',
            testDate: '2023-08-14',
            interviewDate: '',
            link: 'https://jobs.chinastock.com.cn'
        },
        {
            id: jobId++,
            company: '蚂蚁集团',
            priority: 'B',
            industry: '互联网金融',
            base: '杭州',
            position: '资管管培生',
            progress: '已投递',
            detail: '',
            applicationDate: '2023-08-13',
            testDate: '2023-08-15',
            interviewDate: '',
            link: 'https://wecruit.antgroup.com'
        },
        {
            id: jobId++,
            company: '网易',
            priority: 'A',
            industry: '互联网',
            base: '杭州',
            position: '产品经理',
            progress: '已投递',
            detail: '',
            applicationDate: '2023-08-13',
            testDate: '2023-08-16',
            interviewDate: '2023-08-28',
            link: 'https://campus.163.com'
        }
    ];

    // Populate the table with initial job entries
    jobs.forEach(job => addJobRow(job));

    // Handle add row button click
    addRowButton.addEventListener('click', function () {
        const newJob = {
            id: jobId++,
            company: '',
            priority: 'A', // Initial priority for new job
            industry: '互联网',
            base: '北京',
            position: '',
            progress: [],
            detail: '',
            applicationDate: '',
            testDate: '',
            interviewDate: '',
            link: ''
        };

        addJobRow(newJob);
    });

    function addJobRow(job) {
        const row = document.createElement('tr');

        row.innerHTML = `
            <td>${job.id}</td>
            <td><input type="text" value="${job.company}"></td>
            <td>
                <select class="priority-select ${job.priority}">
                    <option value="A" ${job.priority === 'A' ? 'selected' : ''}>A</option>
                    <option value="B" ${job.priority === 'B' ? 'selected' : ''}>B</option>
                    <option value="C" ${job.priority === 'C' ? 'selected' : ''}>C</option>
                </select>
            </td>
            <td>
                <select class="industry-select ${job.industry}">
                    <option value="互联网" ${job.industry === '互联网' ? 'selected' : ''}>互联网</option>
                    <option value="企业" ${job.industry === '企业' ? 'selected' : ''}>企业</option>
                    <option value="国企" ${job.industry === '国企' ? 'selected' : ''}>国企</option>
                </select>
            </td>
            <td>
                <select class="base-select" ${job.base}>
                    <option value="北京" ${job.base === '北京' ? 'selected' : ''}>北京</option>
                    <option value="上海" ${job.base === '上海' ? 'selected' : ''}>上海</option>
                    <option value="深圳" ${job.base === '深圳' ? 'selected' : ''}>深圳</option>
                </select>
            </td>
            <td><input type="text" value="${job.position}"></td>
            <td>
                ${createStatusSelect(job.progress)}
            </td>
            <td><input type="text" value="${job.detail}"></td>
            <td><input type="date" value="${job.applicationDate}"></td>
            <td><input type="date" value="${job.testDate}"></td>
            <td><input type="date" value="${job.interviewDate}"></td>
            <td><input type="url" value="${job.link}"></td>
        `;

        jobTableBody.appendChild(row);

        // 新增：初始化时设置优先级颜色
        const prioritySelect = row.querySelector('select.priority-select');
        updatePriority(prioritySelect);
        // 新增：添加事件监听器以确保更改时更新颜色
        prioritySelect.addEventListener('change', function () {
            updatePriority(this);
        });

        const industrySelect = row.querySelector('select.industry-select');
        updateIndustry(industrySelect);
        industrySelect.addEventListener('change', function () {
            updateIndustry(this);
        });

        const baseSelect = row.querySelector('select.base-select');
        updateBase(baseSelect);
        baseSelect.addEventListener('change', function () {
            updateBase(this);
        });

        // 添加多选框的监听器
        let checkboxes = row.querySelectorAll('.status-select input[type="checkbox"]');
        const newStatusLabel = row.querySelector('.status-select.new-status');
        const statusDropdown = newStatusLabel.querySelector('.status-dropdown');

        newStatusLabel.addEventListener('click', function () {
            statusDropdown.style.display = 'inline';
        });

        statusDropdown.addEventListener('change', function () {
            const selectedStatus = this.value;
            if (selectedStatus) {
                const newStatusHtml = `
                <label class="status-select ${selectedStatus}">
                    <input type="checkbox" value="${selectedStatus}" checked>
                    ${selectedStatus}
                </label>
            `;
                newStatusLabel.insertAdjacentHTML('beforebegin', newStatusHtml);

                // 为新添加的状态添加监听器
                const newCheckbox = newStatusLabel.previousElementSibling.querySelector('input[type="checkbox"]');
                newCheckbox.addEventListener('change', function () {
                    const label = this.parentElement;
                    if (this.checked) {
                        label.style.display = 'inline';
                    } else {
                        label.style.display = 'none';
                        statusDropdown.querySelector(`option[value="${this.value}"]`).disabled = false;
                        checkAddButtonVisibility();
                    }
                    const selectedProgress = Array.from(checkboxes)
                        .filter(cb => cb.checked)
                        .map(cb => cb.value);
                    job.progress = selectedProgress;
                });

                // 更新下拉列表和checkboxes列表
                statusDropdown.querySelector(`option[value="${selectedStatus}"]`).disabled = true;
                statusDropdown.selectedIndex = 0;
                statusDropdown.style.display = 'none';
                checkboxes = row.querySelectorAll('.status-select input[type="checkbox"]');
                checkAddButtonVisibility();
            }
        });

        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function () {
                const label = this.parentElement;
                if (this.checked) {
                    label.style.display = 'inline';
                } else {
                    label.style.display = 'none';
                    statusDropdown.querySelector(`option[value="${this.value}"]`).disabled = false;
                }
                const selectedProgress = Array.from(checkboxes)
                    .filter(cb => cb.checked)
                    .map(cb => cb.value);
                job.progress = selectedProgress;
                checkAddButtonVisibility();
            });
        });

        function checkAddButtonVisibility() {
            const statuses = ['已投递', '已测评', '已一面', '已二面', '已三面', '终止'];
            const selectedStatuses = Array.from(checkboxes)
                .filter(cb => cb.checked)
                .map(cb => cb.value);
            if (selectedStatuses.length === statuses.length) {
                newStatusLabel.style.display = 'none';
            } else {
                newStatusLabel.style.display = 'inline';
            }
        }
    }

    // 修改：函数参数移除jobId
    function updatePriority(selectElement) {
        const selectedPriority = selectElement.value;
        selectElement.className = `priority-select ${selectedPriority}`;
    }
    function updateIndustry(selectElement) {
        const selectedIndustry = selectElement.value;
        selectElement.className = `industry-select ${selectedIndustry}`;
    }
    function updateBase(selectElement) {
        const selectedBase = selectElement.value;
        selectElement.className = `base-select ${selectedBase}`;
    }

    function createStatusSelect(selectedStatuses) {
        const statuses = ['已投递', '已测评', '已一面', '已二面', '已三面', '终止'];
        return statuses.map(status => `
            <label class="status-select ${status}" style="${selectedStatuses.includes(status) ? '' : 'display:none;'}">
                <input type="checkbox" value="${status}" ${selectedStatuses.includes(status) ? 'checked' : ''}>
                ${status}
            </label>
        `).join('') + `
            <label class="status-select new-status">
                <span>+</span>
                <select class="status-dropdown" style="display:none;">
                    <option value="">选择状态</option>
                    ${statuses.map(status => `
                        <option value="${status}" ${selectedStatuses.includes(status) ? 'disabled' : ''}>${status}</option>
                    `).join('')}
                </select>
            </label>
        `;
    }
    // 格式化日期
    function formatDate(dateString) {
        const date = new Date(dateString);
        const month = ("0" + (date.getMonth() + 1)).slice(-2);
        const day = ("0" + date.getDate()).slice(-2);
        return `${month}-${day}`;
    }
});

