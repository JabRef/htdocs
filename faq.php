<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
  <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
  <title>JabRef reference manager</title>
  <link href='css/style.css' rel='stylesheet' type='text/css' />
</head>

<body>
  <div id="container">

    <?php include("navigation.php"); ?>

    <div id="rightpanel">

      <h3>Frequently Asked Questions</h3>
      <span class="single_item"><a href="#general_usage">General usage</a></span>
      <span class="single_item"><a href="#linux"><acronym>JabRef</acronym> &amp; Linux</a></span>
      <span class="single_item"><a href="#windows"><acronym>JabRef</acronym> &amp; Windows</a></span>
      <span class="single_item"><a href="#developers">Developers</a></span>
      <span class="single_item"><a href="#other">Other</a></span>

    </div>

    <div id="main">

      <h2>Frequently Asked Questions</h2>

      <h3 id="general_usage">General usage</h3>

      <p class="question">Q: I am using <acronym>JabRef</acronym> in my work. Should I cite <acronym>JabRef</acronym> in my publications?</p>
      <p class="answer">A: You are not obliged to cite <acronym>JabRef</acronym>, but we would greatly appreciate it if you do.</p>
      <p><code>@Manual{JabRef_software,<br/>
&nbsp;  title = {JabRef},<br/>
&nbsp;  author = {{JabRef Development Team}},<br/>
&nbsp;  year = {<?php echo date("Y"); ?>},<br/>
&nbsp;  url = {http://jabref.sf.net},<br/>
 }</code></p>
      <p class="question">Q: BibTeX converts uppercase characters to lowercase in my title field. I know this can be prevented by wrapping uppercase letters in braces, e.g. &quot;{T}he life cycle of {A}tlantic salmon&quot;, but this is too much work. Can <acronym>JabRef</acronym> help?</p>
      <p class="answer">A: <acronym>JabRef</acronym> has a setting that will automatically wrap all capital letters for certain fields in { } - this will make sure they are preserved in the LaTeX output. Under <b>Options -> Preferences -> General -> File -> &ldquo;Store the following fields with braces around capital letters&rdquo;</b>, make sure the title field is included. To do this for several fields, write e.g. &ldquo;title;abstract&rdquo; (without the quotes). This setting automatically adds braces when saving the bib file, but you won't see the braces within <acronym>JabRef</acronym>.</p>

	  <p class="question">Q: I have a DOI. Is it possible to create an entry directly out of the DOI?</p>
	  <p class="answer">A: Yes. Go to Search and click on &ldquo;Web Search&rdquo; to enable the Web search. A Web search box appears on the left side of <acronym>JabRef</acronym>. &ldquo;ACM Portal&rdquo; is selected. Click on it and change it to &ldquo;DOI to BibTeX&rdquo;. Enter the DOI in the field and press &ldquo;Fetch&rdquo;. A search starts and the result is displayed in a new pop up window. One entry should appear. Just push &ldquo;OK&rdquo; to insert the entry into the database.</p>

	  <p class="question">Q: I have an ISBN. Is it possible to create an entry directly out of the ISBN?</p>
	  <p class="answer">A: Yes. Follow the instructions for converting a DOI. Instead of the &ldquo;DOI to BibTeX&rdquo; fetcher, use &ldquo;ISBN to BibTeX&rdquo;.</p>

	  <p class="question">Q: I miss a field translator, lastfollowedon, ... How can I add such fields?</p>
	  <p class="answer">A:  You can add a &ldquo;translator&ldquo; (or any other) field yourself in <acronym>JabRef</acronym>. Either edit the specific entry type(s)
      (Options->Customize entry types) and add a 'translator' field under required
      fields or optional fields, as you like. Or, you can use Options->Set up general fields and add a
      &ldquo;translator&rdquo; field under one of <acronym>JabRef</acronym>'s general field tabs. This way, the &ldquo;translator&rdquo;
      field will not only apply to a specific entry type.</p>

      <p class="question">Q: How do I prevent <acronym>JabRef</acronym> from introducing line breaks in certain fields (such as &ldquo;title&rdquo;) when saving the .bib file?</p>
      <p class="answer">A: Open Tools -> Preferences. In the &ldquo;General&rdquo; panel, you will find an option called &ldquo;Do not wrap the following fields when saving&rdquo;. This option contains a semicolon-separated list of field names. Any field you add to this list will always be stored without introduction of line breaks.</p>

      <p class="question">Q: Is it possible to open files, e.g. from my web browser, in the running instance of JabRef instead of opening a new instance?</p>
      <p class="answer">A: Yes, if you activate the &ldquo;Remote operation&rdquo; option under <b>Preferences -> Advanced</b>. This option allows new instances of JabRef to detect the instance already running, and pass files to that instead of opening a new window.</p>

      <p class="question">Q: Is it possible to append entries from a BibTeX file, e.g. from my web browser, to the currently opened database?</p>
      <p class="answer">A: Yes, in the upcoming version, you can use the parameter <code>--importToOpen bibfile</code>.</p>

      <p class="question">Q: I want to link external files with paths relative to my .bib file, so I can easily move my database along with its files to another directory. Is this possible?</p>
      <p class="answer">A: Yes. You need to override the default file directory for this specific database. Go to <b>File -> Database properties</b> and change the <b>Default file directory</b> setting. If you simply enter &ldquo;.&rdquo; (a dot, without the quotes), the file directory will be the same as the .bib file directory. To place your files in a subdirectory called <b>subdir</b>, you can enter <b>&ldquo;./subdir&rdquo;</b>. Files will automatically be linked with relative paths if the files are placed in the default file directory or in a directory below it.</p>

      <p class="question">Q: I want to export my bibliography entries into a simple text file so that I can import them into a spreadsheet easily. Is this possible?</p>
      <p class="answer">A: Yes. Use <b>File -> Export</b>. At &ldquo;Files of type&rdquo; choose &ldquo;OpenOffice CSV (*.csv)&rdquo;.</p>

      <p class="question">Q: How can I add and remove keywords of multiple entries?</p>
      <p class="answer">A: Select the entries. Right click. Choose &ldquo;Manage keywords&rdquo;. Then you can manage keywords appearing in all selected entries or in any selected entry. New keywords are added to all selected entries.</p>

      <p class="question">Q: I want to have bib file specific PDF directory.</p>
      <p class="answer">A: Right click on the tab of the .bib file. Choose &ldquo;Database properties&rdquo;. Then at the field &ldquo;General file directory&rdquo; choose the directory specific for the database. 
      If you want to set a directory for you only and other users should use the default directory, use the field &ldquo;User-specific file directory&rdquo;.
      The fields &ldquo;PDF directory&rdquo; and &ldquo;PS directory&rdquo; are legacy fields. Just ignore them.</p>

      <p class="question">Q: When linking a file, I cannot set the correct type. How can I add new types?</p>
      <p class="answer">A: Go to Options -> Preferences -> External programs. Click on &ldquo;Manage external file types&rdquo;. Here you can add arbitrary types.</p>

	  <p class="question">Q: Is there a portable version of JabRef?</p>
	  <p class="answer">A: Store jabref.jar on the drive. It can be opened directly on any computer offering a Java installation. Be sure to activate &ldquo;Load and Save preferences from/to jabref.xml on start-up (memory stick mode)&rdquo; in the Preferences->General. Besides, the <a href="http://jabref.sourceforge.net/jws/jabref.jnlp">Webstart</a> is also an option.</p>

      <p class="question">Q: When an organization is provided as author, my BibTeX style doesn't recognize it. For instance, &ldquo;European Commission&rdquo; is converted to &ldquo;Commission, E.&rdquo;.</p>
      <p class=answer">A: Use braces to tell BibTeX to keep your author field as is: <code>{European Commission}</code>.</p>

      <p class="question">Q: Is there a FAQ on BibTeX?</p>
      <p class="answer">A: Yes, please look at &ldquo;Bibliographies and citations&rdquo; at the <a href="http://www.tex.ac.uk/cgi-bin/texfaq2html">UK List of TeX Frequently Asked Questions on the Web</a>. For German readers, there is the <a href="http://projekte.dante.de/DanteFAQ/LiteraturVerzeichnis">dante e.V. FAQ</a>.</p>

      <h3 id="linux"><acronym>JabRef</acronym> &amp; Linux</h3>

      <p class="question">Q: Does <acronym>JabRef</acronym> run under free Java (Classpath, Kaffee, GCJ, etc.)?</p>
      <p class="answer">A: As far as we know, it has not yet succeeded running JabRef on these free JVMs, due of our dependencies. At the time of writing this (2006-09-13), version 0.92 of Classpath was used. However, <acronym>JabRef</acronym> is reported to run nicely on the <a href="http://fedoraproject.org/wiki/Features/IcedTea">IcedTea</a> runtime, which is based on the <a href="http://openjdk.java.net/">OpenJDK</a> built with <a href="http://www.gnu.org/software/classpath/">GNU Classpath</a> to fill in missing classes. Please let us know if newer versions give different results. If you have an idea or the expertise to make <acronym>JabRef</acronym> work under Classpath let us know.</p>

      <p class="question">Q: <acronym>JabRef</acronym> does not start under Linux! What can I do?</p>
      <p class="answer">A: <acronym>JabRef</acronym> works fine under Linux if you use a Java Runtime Environment (JRE) from Oracle version 1.6 and newer. If running <acronym>JabRef</acronym> fails to start nevertheless do the following for troubleshooting:</p>
      <p class="answer">Run </p><pre>java -version</pre><p class="answer"> from the command line. If this does not report to be a product from Oracle (for instance tells you that it is a GCJ VM) even if you have installed the Oracle JVM then you need to change your setup. This is highly dependent on your
distribution, so we cannot give exact advise for everybody. </p>
      <p class="answer">Under Debian/Ubuntu it works like this (you need to have admin privileges):</p>
      <p class="answer"></p><pre>sudo update-alternatives --config java</pre><p class="answer"></p>
      <p class="answer">In the dialog that appears select the Oracle JDK or JRE. Alternatively you can also search for the java executable and run that directly. In Ubuntu 12.04 LTS you can find Java at </p><pre>/usr/lib/jvm/java-6-openjdk/jre/bin/java</pre><p class="answer"></p>
      <p class="answer">If you do not have root-access on the machine you can install the Sun JRE in your home but need to make sure that you run the correct java executable. For instance if you installed the JRE into a folder called
      </p><pre>java</pre><p class="answer"> in your home try </p><pre>~/java/jre/bin/java -jar JabRef-X.jar</pre><p class="answer">, where 'X' is the JabRef version.</p>

      <p class="question">Q: I am on Debian/Ubuntu and clicking on the <acronym>JabRef</acronym> icon works, but I cannot start <acronym>JabRef</acronym> from the command line. What is wrong?</p>
      <p class="answer">A: You have several Java Virtual Machines installed and under the command line the wrong one is chosen. Have a look at the previous question that tells you how to change the virtual machine used.</p>

      <p class="answer">For Ubuntu you may also have a look at the <a href="https://help.ubuntu.com/community/Java">Ubuntu page on Java</a>.</p>

      <h3 id="windows"><acronym>JabRef</acronym> &amp; Windows</h3>

	  <p class="question">Q: JabRef does not start on Windows 8, 64bit</p>
	  <p class="answer">A: Setting <code>JAVA_HOME</code> environment to java installation directory (e.g. <code>C:\Program Files (x86)\Java\jre7</code>) resolves this issue. An environment variable can be added/modified from Control Panel -> System and Security -> System -> Advanced System Setting -> Advanced Setting tab -> Environment Variables button.</p>

      <p class="question">Q: My virus-scanner tells me that <acronym>JabRef</acronym> is a virus. Is your server compromised?</p>
      <p class="answer">A: No. But the windows installer uses <a href="http://nsis.sourceforge.net/Main_Page">the Nullsoft Scriptable Install System (NSIS)</a> version 2.18 (as of <acronym>JabRef</acronym> 2.1) which unfortunately creates installers that are thought to be viruses by some virus-scanners.</p>
      <p class="answer">See the <a href="http://forums.winamp.com/showthread.php?postid=1977648">discussion
      in the NSIS forum</a> or <a href="http://nsis.sourceforge.net/NSIS_False_Positives">the list of false
      positives with NSIS</a> for details.</p>
      <p class="answer">As a work-around and if you are afraid to use the installer you can always use the platform independent jar and run it from the command line:</p>
      <p class="answer"></p><pre>java -jar JabRef-X.jar</pre><p class="answer"></p>
      <p class="answer">where 'X' is the JabRef version.</p>
      <p class="answer">Since JabRef is open source, you can of course also download the source code and compile it yourself.</p>
      <p class="answer">If you want to do anything about this issue, please report this bug with your virus scanner.</p>

      <h3 id="developers">Developers</h3>

      <p class="question">Q: How can I join the <acronym>JabRef</acronym> project?</p>
      <p class="answer">A: Sign up with sourceforge and write an email to our project leader Morten O. Alver. Good ways to start with the project is to help with fixing bugs (maybe some that trouble you yourself ;-), writing FAQs, helping users in the forum and translating <acronym>JabRef</acronym> into another language.</p>

      <p class="question">Q: I would like to help translating JabRef to another language. How do I get started?</p>
      <p class="answer">A: Please see our page about <a href="translation.php">translating JabRef</a>.</p>

      <p class="question">Q: I have a patch that I want to contribute. Where can I do that?</p>
      <p class="answer">A: Please send patches to the Patch-Tracker on Sourceforge and write a quick entry on the user or developer list.</p>

      <p class="question">Q: What is the branching strategy used in <acronym>JabRef</acronym>'s Git repository?</p>
      <p class="answer">A: The master branch is used for developments targeted for the next release. When we release the first beta of a new version, e.g. 2.8, we make a branch (beta_2.8). From that moment, all changes that are to be part of the 2.8 version must be made in the branch, while changes that are for the following version must be made in the master branch. This lets us polish the 2.8 version while at the same time checking in features for version 2.9. When 2.8 is finished, it is built from the beta_2.8 branch, and then all changes that have been made in the beta_2.8 branch since it was created are merged into the master. At this point the master has all the changes of the 2.8 version, in addition to whatever has been done in the master in the meantime.</p>

      <h3 id="other">Other</h3>

      <p class="question">Q: My question is not answered here. What can I do?</p>
      <p class="answer">A: After consulting the <a href="http://jabref.sourceforge.net/documentation.php">documentation</a>
      and checking whether your question has been answered in the <a href="https://sourceforge.net/p/jabref/discussion/318825/">forum</a>, check the <a href="https://sourceforge.net/p/jabref/bugs/">bug-tracker</a> if this has been discussed before. If you cannot find anything in an reasonable amount of time write a message in the forum, problems usually get resolved rather quickly (at least we hope so ;-).</p>

      <p class="question">Q: There is a mistake in this FAQ, a dead link or I have written a better/new explanation for a question!</p>
      <p class="answer">A: Let us know as soon as possible! => <a href="https://sourceforge.net/p/jabref/discussion/318825/"><acronym>JabRef</acronym> User Forum</a> or our <a href="https://lists.sourceforge.net/lists/listinfo/jabref-users">mailinglist</a></p>

    </div>
    <?php include("footer.php"); ?>
  </div>

</body>
</html>
