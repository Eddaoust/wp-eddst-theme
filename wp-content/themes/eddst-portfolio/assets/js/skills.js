jQuery.post(
    ajaxurl,
    {
        'action': 'get_skills_data',
    },
    function(response){
        let first_iteration = true;
        let counter = 1;
        let container = document.querySelector('.block-barre');
        let skillsValues = [];
        for (const item of response.data) {
            if (first_iteration) {
                const p = document.createElement('p');
                p.id = 'first-barre';
                p.innerText = Object.keys(item)[0].toUpperCase();
                const barre = document.createElement('div');
                barre.classList.add('barre');
                const div = document.createElement('div');
                div.id = `skill-${counter}`;
                barre.appendChild(div);
                container.appendChild(p);
                container.appendChild(barre);
                first_iteration = false;
                counter++;
                skillsValues.push(item[Object.keys(item)[0]]);
            } else {
                const p = document.createElement('p');
                p.innerText = Object.keys(item)[0].toUpperCase();
                const barre = document.createElement('div');
                barre.classList.add('barre');
                const div = document.createElement('div');
                div.id = `skill-${counter}`;
                barre.appendChild(div);
                container.appendChild(p);
                container.appendChild(barre);
                counter++;
                skillsValues.push(item[Object.keys(item)[0]]);
            }
        }

        function skill1(){
            var skill = document.getElementById('skill-1');
            if (skill) {
                var id = setInterval(frame, 100);
                function frame(){
                    skill.style.width = `${skillsValues[0]}%`;
                    skill.style.transition = 'width 3s';
                }
            }

        }

        function skill2(){
            var skill = document.getElementById('skill-2');
            if (skill) {
                var id = setInterval(frame, 100);
                function frame(){
                    skill.style.width = `${skillsValues[1]}%`;
                    skill.style.transition = 'width 3s';
                }
            }
        }

        function skill3(){
            var skill = document.getElementById('skill-3');
            if (skill) {
                var id = setInterval(frame, 100);
                function frame(){
                    skill.style.width = `${skillsValues[2]}%`;
                    skill.style.transition = 'width 3s';
                }
            }
        }

        function skill4(){
            var skill = document.getElementById('skill-4');
            if (skill) {
                var id = setInterval(frame, 100);
                function frame(){
                    skill.style.width = `${skillsValues[3]}%`;
                    skill.style.transition = 'width 3s';
                }
            }
        }

        function skill5(){
            var skill = document.getElementById('skill-5');
            if (skill) {
                var id = setInterval(frame, 100);
                function frame(){
                    skill.style.width = `${skillsValues[4]}%`;
                    skill.style.transition = 'width 3s';
                }
            }
        }

        function skill6(){
            var skill = document.getElementById('skill-6');
            if (skill) {
                var id = setInterval(frame, 100);
                function frame(){
                    skill.style.width = `${skillsValues[5]}%`;
                    skill.style.transition = 'width 3s';
                }
            }
        }


        function isInViewport(element) {
            var rect = element.getBoundingClientRect();
            var html = document.documentElement;
            return (
                rect.top >= 0 &&
                rect.left >= 0 &&
                rect.bottom <= (window.innerHeight || html.clientHeight) &&
                rect.right <= (window.innerWidth || html.clientWidth)
            );
        }

        var trig = document.getElementById('trig');
        document.addEventListener('scroll', function(){
            if(isInViewport(trig)){
                skill1();
                skill2();
                skill3();
                skill4();
                skill5();
                skill6();
            }
        });
    }
);

