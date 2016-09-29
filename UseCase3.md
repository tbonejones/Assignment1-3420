### Title
Send Refined Software Package Name to NIST Database

(I think that this use case is covered in Use Case #2. This third use case should just focus on the policy stuff). 
(I don't think that you have a dedicated path in your DFD that will actually do only this). 

### Primary Actor
Developer

### Goal in Context
A developer is able to receive a document showing all of the Known Vulnerabilities for a submitted Software Package and the Known Vulnerabilities information is also saved to the OSS Licensing and Vulnerabilities Data Store.

### Stakeholders
Developer: to receive a document showing all of the Known Vulnerabilities for a submitted Software Package.<br/>
Manager: to have the Known Vulnerabilities stored in the OSS Licensing and Vulnerabilities Data Store in case he/she ever wants to browse them.

### Preconditions
The Software Package has been submitted to the Manage Software Package for License and Vulnerabilities Scanning 
process and the name has been refined before being sent to the NIST Database so that results are specific to the actual Software Package. NIST has collected all of the Known Vulnerabilities and stored them in their Database.

### Main Success Scenario
The NIST Database is accurately searched and the Known Vulnerabilities for the Software Package are returned to the developer and also saved to the OSS Licensing and Vulnerabilities Data Store.

### Failed End Conditions
An error occurs and the Developer does not receive the Known Vulnerabilities information or it is not saved to the OSS Licensing and Vulnerabilities Data Store. A Known Vulnerability is not stored in the NIST Database and the company uses the Software Package and the vulnerability is exploited by hackers.

### Trigger 
Developer submits a Software Package to the Manage Software Package for License and Vulnerabilities Scanning process, which, as part of its process, sends a Refined Software Package Name to the Send Refined Software Package Name to NIST Database process.


