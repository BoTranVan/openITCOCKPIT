[//]: # (Links)
[page]: / "Your dashboard"
[graphs]: /documentations/wiki/basic-monitoring/graphgenerator/en "Graph documentation"
[maps doc]: /documentations/wiki/maps/maps/en "Maps documentation"
[md]: /documentations/wiki/additional-help/markdown/en "Markdown Cheatsheet"

[//]: # (Pictures)
[Host downtimes]: /img/docs/dashboard/dashboards/host_downtimes.png (Host downtimes)
[Hosts Piechart]: /img/docs/dashboard/dashboards/hosts_piechart.png (Hosts Piechart)
[Parentoutages]: /img/docs/dashboard/dashboards/parentoutages.png (Parentoutages)
[Service downtimes]: /img/docs/dashboard/dashboards/service_downtimes.png (Service downtimes)
[Services Piechart]: /img/docs/dashboard/dashboards/services_piechart.png (Services Piechart)
[Trafficlight]: /img/docs/dashboard/dashboards/trafficlight.png (Trafficlight)
[Tachometer]: /img/docs/dashboard/dashboards/tachometer.png (Tachometer)
[Welcome]: /img/docs/dashboard/dashboards/welcome.png (Welcome)
[Services Statuslist]: /img/docs/dashboard/dashboards/services_statuslist.png (Services Statuslist)
[Hosts Statuslist]: /img/docs/dashboard/dashboards/hosts_statuslist.png (Hosts Statuslist)
[Maps]: /img/docs/dashboard/dashboards/maps.png (Maps)
[Browser]: /img/docs/dashboard/dashboards/browser.png (Browser)
[Notice]: /img/docs/dashboard/dashboards/notice.png (Notice)
[Graph Generator]: /img/docs/dashboard/dashboards/graph_generator.png (Graph Generator)

[//]: # (Content)

## What is the Dashboard in openITCOCKPIT v3?

Every user has his [own dashboard][page] that he can customize the way he likes it.
A dashboard has tabs and tabs contain widgets.
A widget is a small tool that
retrieves information from your monitoring system
to give you a visual feedback like graphs, charts, tables and more.
You can move, resize, rename and color all widgets.

## How to add new tab?
Click on
<a class="btn btn-xs btn-success"><i class="fa fa-plus"></i></a>
in the right corner of the tab bar.

A drop down appears where you click on
<a class="btn btn-xs btn-default"><i class="fa fa-plus"></i> New Tab</a>.

A pop up dialog appears where you can set the name of the new tab.

Click on <a class="btn btn-xs btn-primary">OK</a> to create your new tab.

Click on <a class="btn btn-xs btn-default">Cancel</a> if you want to discard your changes.

The new tab appears after the last tab.

## What is a shared tab?
A shared tab is a tab from another user that is shared across all users of your openITCOCKPIT implementation.

If the user has changed his tab other users that use the shared tab get notified and asked if they want to update their tab.

## How to add a shared tab?
Click on
<a class="btn btn-xs btn-success"><i class="fa fa-plus"></i></a>
in the right corner of the tab bar.

A drop down appears where you choose a shared tab and click on
<a class="btn btn-xs btn-primary">Save</a> to create the shared tab.

The new tab appears after the last tab.

## How do I rename a tab?

Click on the current tab name.

A drop down menu appears.

Click on
<a class="btn btn-default btn-xs"><i class="fa fa-pencil-square-o"></i> Rename</a>,
a pop up appears where you can edit the current tab name.

Click on <a class="btn btn-xs btn-primary">OK</a> to save the new tab name.

Click on <a class="btn btn-xs btn-default">Cancel</a> if you want to discard your changes.

## How do I share a tab?

Click on the current tab name.

A drop down menu appears.

Click on
<a class="btn btn-default btn-xs"><i class="fa fa-share-alt"></i> Start sharing</a>,
a pop up appears which you have to confirm to start the tab sharing.

## How do I stop the tab sharing?

Click on the current tab name.

A drop down menu appears.

Click on
<a class="btn btn-default btn-xs"><i class="fa fa-share-alt"></i> Stop sharing</a>,
a pop up appears which you have to confirm to stop the tab sharing.

## How do I delete a tab?

Click on the current tab name.

A drop down menu appears.

Click on
<a class="btn btn-default btn-xs txt-color-red"><i class="fa fa-trash-o"></i> Delete</a>
a pop up appears which you have to confirm to delete the current tab.

## How do I configure a tab rotation?
Click on
<a class="btn btn-xs btn-success"><i class="fa fa-refresh"></i></a>
in the right corner of the tab bar.

A drop down appears where you choose the tab rotation interval time via a slider.

After you have chosen a new value, the drop down disappears.

Set it to zero to stop the rotation.

If the rotation is on, the rotation button is rotating.

## How to add a Widget?
Click on
<a class="btn btn-xs btn-success"><i class="fa fa-plus"></i> New Widget</a>
in the upper right corner.

A drop down menu opens with all widgets that you can choose from
and an additional **Recreate default page** option.
This option to recreates the default page in the current tab,
this means the default widgets replace your current widgets in your current tab.

## How can I rename a widget?

Click in the widget bar on
<a class="btn btn-xs btn-default"><i class="fa fa-cog"></i></a>,
a pop up appears where you rename your widget.

## How can I resize a widget?

Click and hold
<span class="btn-xs"><i class="fa fa-expand fa-rotate-90"></i></span>
on the bottom right.
Drag it into a direction to resize the widget.

## How can I move a widget?

Click and hold the widget bar.
Drag it into a direction to move the widget around.

You can not put the widget in the middle of nowhere,
because all widgets have a gravitational like pull towards the tab bar.

## How can I delete a widget?
Click in the widget bar on
<a class="btn btn-xs btn-default"><i class="fa fa-times"></i></a>,
a pop up appears confirm to delete the widget.

## How can I color a widgets bar?
Click in the widget bar on
<i class="fa fa-lg fa-square-o"></i>,
a pop up appears where you can choose a new color for the widget bar.

## What widgets are there?

#### <i class="fa fa-power-off"></i> Host downtimes

Display if there is currently a host downtime.

![Host downtimes]

#### <i class="fa fa-pie-chart"></i> Hosts Piechart

Display a pie chart of all host states.
You can click on the state color below the chart
to display the hosts with the state you clicked.

![Hosts Piechart]

#### <i class="fa fa-exchange"></i> Parentoutages

Displays if parent hosts are down or unreachable.

![Parentoutages]

#### <i class="fa fa-power-off"></i> Service downtimes

Display if there is currently a service downtime.

![Service downtimes]

#### <i class="fa fa-pie-chart"></i> Services Piechart

Display a pie chart of all service states.
You can click on the state color below the chart
to display the hosts with the state you clicked.

![Services Piechart]

#### <i class="fa fa-road"></i> Trafficlight

Displays the current state of a service as a traffic light.

![Trafficlight]

#### <i class="fa fa-tachometer"></i> Tachometer

Display the value of a service such as the local disk space.

You have to define the following values:

* **Minimum** - Start value of the tachometer
* **Warning** - Begin of the warning range
* **Critical** - Begin of the critical range
* **Maximum** - End value of the tachometer

![Tachometer]

#### <i class="fa fa-comment"></i> Welcome

Shows you what timezone you configured and how many hosts and services you have.

![Welcome]

#### <i class="fa fa-list-alt"></i> Services Statuslist

Shows you services with different states in a listing,
which automatically browses through the pages after the configured interval.

You can configure the following:
* **Pause and scroll direction** - Pause the animation and choose wether the services are faded in from right to left or bottom to top.
* **Paging interval (secs)** - After the interval the widget will browse to the next page.
* **States to show** - Displays only the services with the selected states.
* **Show acknowledged or services in downtime** - Choose if acknowledged services and/or services in downtime should be displayed.
* **Search** - Search through the available services.

Click on <a class="btn btn-xs btn-primary">Save</a> to save your widget configuration.

![Services Statuslist]

#### <i class="fa fa-list-alt"></i> Hosts Statuslist

Shows you hosts with different states in a listing,
which automatically browses through the pages after the configured interval.

You can configure the following:
* **Hosts per page** - How many rows a page has.
* **Refresh interval (min)** - After the refresh interval the host date reloads.
* **Paging interval (secs)** - After the interval the widget will browse to the next page.
* **State colors** - Displays only the hosts with the ticked states.
* **Search** - Search through the available hosts.

Click on <a class="btn btn-xs btn-primary">Save</a> to save your widget configuration.

![Hosts Statuslist]

#### <i class="fa fa-globe"></i> Maps

This widget displays the map you chose.
To learn more about maps, click [here][maps doc].

![Maps]

#### <i class="fa fa-laptop"></i> Browser

You can use the browser to browse to a secure URL (HTTPS).

![Browser]

#### <i class="fa fa-pencil-square-o"></i> Notice

Make a notice formated via [mark down][md].

![Notice]

#### <i class="fa fa-line-chart"></i> Graph Generator

Shows a graph of a service.
To learn more about graphs, click [here][graphs].

![Graph Generator]

