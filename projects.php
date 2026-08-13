<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
</head>
<body>

    <!--=====================================
                HEADER                                      
     =======================================-->
    <?php include 'includes/header.php'; ?>
     
     <!--===============================================
                             PROJECTS
    =================================================-->
    <section id="projects">
        
        <div class="title-container-projects">
            <h2 class="section-title">
                My Projects
            </h2>
        </div>

                <p class="project-paragraph">
                    Here are some of the projects I have developed to practice and
                    enhance my web development skills. These projects demonstrate
                    my understanding of front-end design, database management, and
                    full-stack application development.
                </p>


                    <div class="project-grid">

                        <div class="project-card">
                            <img src="images/customer-order.png" alt="Customer Order">
                            <div class="card-content">
                                <h3>Customer Order</h3>
                                    <p>
                                        n8n workflow that watches new orders, routes by status (On the Way, Delivered, Cancel), 
                                        sends Gmail notifications, and logs to Google Sheets.
                                    </p>
                            </div>
                        </div>

                        <div class="project-card">
                            <img src="images/facebook-automation.png" alt="facebook-automation">
                            <div class="card-content">
                                <h3>Facebook chatbot</h3>
                                    <p>
                                    n8n workflow with webhook triggers, AI Agent powered by Google Gemini with memory, 
                                    processing Facebook page messages autonomously.
                                </p>
                         </div>
                        </div>

                        <div class="project-card">
                            <img src="images/email-documentation.png" alt="email-documentation">
                            <div class="card-content">
                                <h3>Email Documentation</h3>
                                <p>
                                    Make.com scenario that watches Gmail, extracts attachments, 
                                    uploads to Analyza AI for processing, stores in Google Drive, and 
                                    sends notifications.
                                </p>
                            </div>
                        </div>

                        <div class="project-card">
                            <img src="images/lead-action.png" alt="lead-action">
                            <div class="card-content">
                                <h3>Lead Automation</h3>
                                <p>
                                    Zapier multi-path workflow triggered by Asana task updates, 
                                    routing leads through stages (Ready, Quoted, Approved, Paid) 
                                    with automated Gmail emails.
                                </p>
                            </div>
                        </div>

                        <div class="project-card">
                            <img src="images/lead-enrichment.png" alt="Lead Enrichment">
                            <div class="card-content">
                                <h3>Lead Enrichment</h3>
                                <p>
                                    Zapier workflow that enriches incoming leads via Apollo API, 
                                    splits by priority, saves to Google Sheets, notifies Slack, and 
                                    drafts AI emails.
                                </p>
                            </div>
                        </div>

                        <div class="project-card">
                            <img src="images/from-submissions.png" alt="Form Submissions">
                            <div class="card-content">
                                <h3>Form Submissions</h3>
                                <p>
                                    Make.com scenario integrating Tally forms with Google Sheets and Slack, 
                                    routing data through multiple channels with conditional logic.
                                </p>
                            </div>
                        </div>

                        <div class="project-card">
                            <img src="images/rag-agent-clinic.png" alt="Ai Agent for Clinics">
                            <div class="card-content">
                                <h3>Ai Agent for Clinics</h3>
                                <p>
                                    n8n RAG chatbot using Google Gemini, Supabase Vector Store for embeddings, 
                                    with file upload/update/delete handling for knowledge base.
                                </p>
                            </div>
                        </div>

                        <div class="project-card">
                            <img src="images/Processing-Agent.png" alt="Processing Agent">
                            <div class="card-content">
                                <h3>Processing Agent</h3>
                                <p>
                                    n8n workflow with webhook trigger, AI Agent using Google Gemini with memory and structured output, 
                                    reating Airtable records and sending Gmail.
                                </p>
                            </div>
                        </div>

                    </div>

    </section>

    <!--=====================================================
                            FOOTER
    =======================================================-->
    <?php include 'includes/footer.php'; ?>

</body>
</html>
</body>
</html>