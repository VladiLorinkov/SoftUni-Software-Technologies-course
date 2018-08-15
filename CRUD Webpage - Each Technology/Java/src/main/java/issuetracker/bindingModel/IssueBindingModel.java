package issuetracker.bindingModel;

public class IssueBindingModel {

    private String Title;

    private String Content;

    private Integer Priority;

    public IssueBindingModel() {
    }

    public IssueBindingModel(String title, String content, Integer priority) {
        Title = title;
        Content = content;
        Priority = priority;
    }

    public String getTitle() {
        return Title;
    }

    public void setTitle(String title) {
        Title = title;
    }

    public String getContent() {
        return Content;
    }

    public void setContent(String content) {
        Content = content;
    }

    public Integer getPriority() {
        return Priority;
    }

    public void setPriority(Integer priority) {
        Priority = priority;
    }
}
