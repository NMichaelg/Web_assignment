<style>
    <?php
        include 'style.css'
    ?>
</style>

 <section id = "preview-sc" class = "print_area">
            <div class = "container">
                <div class = "preview-cnt">
                    <div class = "preview-cnt-l bg-green text-white">
                        <div class = "preview-blk">
                            <div class = "preview-image">
                                <img src = "" alt = "" id = "image"> 
                            </div>
                            <div class = "preview-item preview-item-name">
                                <span class = "preview-item-val fw-6" id = "fullname"></span>
                            </div>
                        </div>

                        <div class = "preview-blk">
                            <div class = "preview-blk-title">
                                <h3>about</h3>
                            </div>
                            <div class = "preview-blk-list">
                                <div class = "preview-item">
                                    <p>Phone: </p>
                                    <div class = "preview-item-val" id = "phone"></div>
                                </div>
                                <div class = "preview-item emailShow" >
                                    <span>Email: </span><span class = "preview-item-val" id = "email"></span>
                                </div>
                                <div class = "preview-item">
                                    <div class = "preview-item-val" id = "address"></div>
                                </div>
                                <div class = "preview-item">
                                    <span class = "preview-item-val" id = "summary"></span>
                                </div>
                            </div>
                        </div>

                        <div class = "preview-blk">
                            <div class = "preview-blk-title">
                                <h3>skills</h3>
                            </div>
                            <div class = "skills-items preview-blk-list" id = "skills">
                                <!-- skills list here -->
                            </div>
                        </div>
                    </div>

                    <div class = "preview-cnt-r bg-white">
                         <div class = "preview-blk">
                            <div class = "preview-blk-title">
                                <h3>Objectives</h3>
                            </div>
                            <div class = "achievements-items preview-blk-list" id = "achievements"></div>
                        </div>
                        <div class = "preview-blk">
                            <div class = "preview-blk-title">
                                <h3>Achievements</h3>
                            </div>
                            <div class = "achievements-items preview-blk-list" id = "achievements"></div>
                        </div>

                        <div class = "preview-blk">
                            <div class = "preview-blk-title">
                                <h3>educations</h3>
                            </div>
                            <div class = "educations-items preview-blk-list" id = "educations"></div>
                        </div>

                        <div class = "preview-blk">
                            <div class = "preview-blk-title">
                                <h3>experiences</h3>
                            </div>
                            <div class = "experiences-items preview-blk-list" id = "experiences"></div>
                        </div>

                        <div class = "preview-blk">
                            <div class = "preview-blk-title">
                                <h3>projects</h3>
                            </div>
                            <div class = "projects-items preview-blk-list" id = "projects"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div id="no-cv-message" style="text-align: center; margin-top: 20px; font-size: 20px; display: none;">
            No CV found.
        </div>

<style>
    <?php include 'style.css'; ?>
</style>

<section id="preview-sc" class="print_area" style="display: none;">
    <div class="container">
        <div class="preview-cnt">
            <div class="preview-cnt-l bg-green text-white">
                <div class="preview-blk">
                    <div class="preview-image">
                        <img src="" alt="Profile Image" id="image" style="width: 100%; height: auto;"> 
                    </div>
                    <div class="preview-item preview-item-name">
                        <span class="preview-item-val fw-6" id="fullname"></span>
                    </div>
                </div>

                <div class="preview-blk">
                    <div class="preview-blk-title">
                        <h3>About</h3>
                    </div>
                    <div class="preview-blk-list">
                        <div class="preview-item">
                            <p>Phone: </p>
                            <div class="preview-item-val" id="phone"></div>
                        </div>
                        <div class="preview-item emailShow">
                            <p>Email: </p>
                            <span class="preview-item-val" id="email"></span>
                        </div>
                        <div class="preview-item">
                            <p>Address: </p>
                            <div class="preview-item-val" id="address"></div>
                        </div>
                        <div class="preview-item">
                            <p>Summary: </p>
                            <span class="preview-item-val" id="summary"></span>
                        </div>
                    </div>
                </div>

                <div class="preview-blk">
                    <div class="preview-blk-title">
                        <h3>Skills</h3>
                    </div>
                    <div class="skills-items preview-blk-list" id="skills"></div>
                </div>
            </div>

            <div class="preview-cnt-r bg-white">
                <div class="preview-blk">
                    <div class="preview-blk-title">
                        <h3>Objectives</h3>
                    </div>
                    <div class="objectives-items preview-blk-list" id="objectives"></div>
                </div>
                <div class="preview-blk">
                    <div class="preview-blk-title">
                        <h3>Achievements</h3>
                    </div>
                    <div class="achievements-items preview-blk-list" id="achievements"></div>
                </div>

                <div class="preview-blk">
                    <div class="preview-blk-title">
                        <h3>Educations</h3>
                    </div>
                    <div class="educations-items preview-blk-list" id="educations"></div>
                </div>

                <div class="preview-blk">
                    <div class="preview-blk-title">
                        <h3>Experiences</h3>
                    </div>
                    <div class="experiences-items preview-blk-list" id="experiences"></div>
                </div>

                <div class="preview-blk">
                    <div class="preview-blk-title">
                        <h3>Projects</h3>
                    </div>
                    <div class="projects-items preview-blk-list" id="projects"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<div id="no-cv-message" style="text-align: center; margin-top: 20px; font-size: 20px; display: none;">
    No CV found.
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const urlParams = new URLSearchParams(window.location.search);
        const id = urlParams.get('id');

        if (!id) {
            alert("Invalid ID parameter!");
            return;
        }

        fetch(`views/view_cv/find_cv.php?id=${id}`)
            .then(response => {
                if (!response.ok) throw new Error("Failed to fetch data.");
                return response.json();
            })
            .then(data => {
                if (data.error) {
                    document.getElementById('no-cv-message').style.display = 'block';
                    document.getElementById('preview-sc').style.display = 'none';
                } else {
                    document.getElementById('no-cv-message').style.display = 'none';
                    document.getElementById('preview-sc').style.display = 'block';

                    const { cv_info, phones, addresses, achievements, experiences, educations, projects, skills } = data;

                    document.getElementById('fullname').textContent = `${cv_info.fname || ''} ${cv_info.mname || ''} ${cv_info.lname || ''}`.trim();
                    document.getElementById('email').textContent = cv_info.email || 'Not provided';
                    document.getElementById('image').src = cv_info.img || 'default-profile.png';

                    document.getElementById('phone').innerHTML = phones.length 
                        ? phones.map(phone => `<div>${phone.phone}</div>`).join('') 
                        : 'No phone numbers available';

                    document.getElementById('address').innerHTML = addresses.length 
                        ? addresses.map(addr => `<div>${addr.street || ''}, ${addr.city || ''}, ${addr.country || ''}</div>`).join('') 
                        : 'No addresses available';

                    document.getElementById('achievements').innerHTML = achievements.length 
                        ? achievements.map(ach => `<div><strong>${ach.title || ''}</strong>: ${ach.description || ''}</div>`).join('') 
                        : 'No achievements available';

                    document.getElementById('experiences').innerHTML = experiences.length 
                        ? experiences.map(exp => `
                            <div>
                                <strong>${exp.title || ''}</strong> at ${exp.company || 'Unknown'}
                                <br>Location: ${exp.location || 'N/A'}
                                <br>Duration: ${exp.start_date || 'N/A'} - ${exp.end_date || 'N/A'}
                                <br>${exp.description || ''}
                            </div>
                        `).join('') 
                        : 'No experiences available';

                    document.getElementById('educations').innerHTML = educations.length 
                        ? educations.map(edu => `
                            <div>
                                <strong>${edu.degree || ''}</strong> from ${edu.school || ''}
                                <br>Specialization: ${edu.specialization || 'N/A'}
                                <br>Year: ${edu.year || 'N/A'}
                                <br>${edu.description || ''}
                            </div>
                        `).join('') 
                        : 'No education records available';

                    document.getElementById('projects').innerHTML = projects.length 
                        ? projects.map(proj => `
                            <div>
                                <strong>${proj.pname || ''}</strong>
                                <br><a href="${proj.plink || '#'}" target="_blank">${proj.plink || 'No link available'}</a>
                                <br>${proj.description || ''}
                            </div>
                        `).join('') 
                        : 'No projects available';

                    document.getElementById('skills').innerHTML = skills.length 
                        ? skills.map(skill => `<div>${skill.skill || ''} (${skill.year || 'N/A'})</div>`).join('') 
                        : 'No skills available';
                }
            })
            .catch(error => {
                console.error('Error fetching data:', error);
                alert('Error fetching data. Please check the console for details.');
            });
    });
</script>
